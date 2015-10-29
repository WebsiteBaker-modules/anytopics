<?php

/*
 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2007, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

 -----------------------------------------------------------------------------------------
  Code snippet AnyNews for Website Baker v2.6.x
  Licencsed under GNU, written by Chio
 
 -----------------------------------------------------------------------------------------
 *	MODULE VERSION HISTORY
 -----------------------------------------------------------------------------------------
 *	v0.41 stable (DarkViper: Oct 15, 2009)
 *	+ added support for sections selection ($section_id:=0 all sections, $section_id:=X section X, $section_id:=array(1,4,5) sections 1,4,5
 *	+ added support for sort-order ( $sort_order:=0 DESC, $sort_order:=1 ASC )
 
------------------------------------------------------------------------------------------
 
 -----------------------------------------------------------------------------------------
*/

// 6-12-2013 - 0.45 - By Ruud - version fixed for deleted pages

$module_directory     = 'anytopics';
$module_name          = 'Topics and Comments anywhere';
$module_function      = 'snippet';
$module_version       = '0.45';
$module_platform      = '2.7.x';
$module_author        = 'Chio';
$module_license       = 'GNU General Public License';
$module_description   = 'Snippet to display the last topics and comments (Topics-Module). Simplest call: display_topics();';
?>