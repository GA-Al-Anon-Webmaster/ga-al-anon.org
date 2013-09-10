#!/usr/bin/perl -w
#

while (<>) {
chomp;
tr/\015//d;     # remove the trailing \r of each line

if (/images\//)
	{
	( $imageName ) = $_ =~ /images\/(.*) /  ;
	print $imageName,"\n";
	}
}
