<?php 

/*
Whois2.php	PHP classes to conduct whois queries

Copyright (C)1999,2000 easyDNS Technologies Inc. & Mark Jeftovic

Maintained by Mark Jeftovic <markjr@easydns.com>          

For the most recent version of this package: 

http://www.easydns.com/~markjr/whois2/

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

/* org.whois	1.0	David Saez */

if(!defined("__ORG_HANDLER__")) define("__ORG_HANDLER__",1);

require_once("generic2.whois");

class org_handler {

	function org($data) {
		$this->result = $this->parse($data);
	}

	function parse($data_str) {
		$items = array(
			"domain.name" => "Domain Name:",
			"domain.status" => "Status:",
			"domain.nserver." => "Name Server:",
			"domain.created" => "Created On:",
			"domain.changed" => "Last Updated On:",
			"domain.expires" => "Expiration Date:",
			"domain.sponsor" => "Sponsoring Registrar:",
			"owner.name" => "Registrant Name:",
			"owner.handle" => "Registrant ID:",
			"owner.address.address.0" => "Registrant Street1:",
			"owner.address.address.1" => "Registrant Street2:",
			"owner.address.zcode" => "Registrant Postal Code:",
			"owner.address.city" => "Registrant City:",
			"owner.address.country" => "Registrant Country:",
			"owner.email" => "Registrant Email:",
			"admin.name" => "Admin Name:",
			"admin.handle" => "Admin ID:",
			"admin.address.address.0" => "Admin Street1:",
			"admin.address.address.1" => "Admin Street2:",
			"admin.address.zcode" => "Admin Postal Code:",
			"admin.address.city" => "Admin City:",
			"admin.address.country" => "Admin Country:",
			"admin.email" => "Admin Email:",
			"tech.name" => "Tech Name:",
			"tech.handle" => "Tech ID:",
			"tech.address.address.0" => "Tech Street1:",
			"tech.address.address.1" => "Tech Street2:",
                        "tech.address.zcode" => "Tech Postal Code:",
                        "tech.address.city" => "Tech City:",
                        "tech.address.country" => "Tech Country:",
                        "tech.email" => "Tech Email:",
			"tech.phone" => "Technical Phone Number:"
			);

		$r["rawdata"] = $data_str["rawdata"];
		$r["regrinfo"] = generic_whois ($data_str["rawdata"],$items);
		$r['regyinfo']['referrer'] ='http://www.pir.org/';
        	$r['regyinfo']['registrar']='Public Interest Registry';
		return($r);
	}
}

?>
