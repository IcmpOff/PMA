#!/bin/sh
#!/bin/bash

TMPDIR=/tmp
OUTPUTIP=0
HTTPPREFIX=0
IP=
PREFIX=

if [ -z "$1" ]; then
 echo "need an IP or hostname"
 exit 1
fi

num_vhosts=10
page=0
IP="$1"

all_hosts=`mktemp -p $TMPDIR -t bing-ip2hosts.tmp.XXXXXX`

while [ "$num_vhosts" == 10 ]; do
 url="http://m.bing.com/search/search.aspx?A=webresults&Q=ip%3a$IP&D=Web&SI=$page""0"
 out=`mktemp -p "$TMPDIR" -t bing-ip2hosts.tmp.XXXXXX`
 wget -q -O "$out" "$url"
 vhosts=`cat "$out"| egrep -o  "(<span class=\"c2\">)[^<]+(<\/)" | sed -e 's/<span class="c2">\|<\///g'`
 num_vhosts=`echo "$vhosts" | wc -l`
 echo -e "$vhosts" >> "$all_hosts"
 rm -f "$out"
 let page=$page+1 
done

uniq_hosts=`cat "$all_hosts" | cut -d '/' -f 1 | tr '[:upper:]' '[:lower:]' | sort | uniq`
rm -f "$all_hosts"

if [ $OUTPUTIP == 1 ]; then
	PREFIX="$IP,"
fi
if [ $HTTPPREFIX == 1 ]; then
	PREFIX="$PREFIX""http://"
fi

for h in `echo "$uniq_hosts"`
do
	echo "$PREFIX$h"
done	
