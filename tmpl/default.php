<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<?php 

$RecruitmentStatus=$params->get('RecruitmentStatus');
$RecruitmentBlurb=$params->get('RecruitmentBlurb');

$JediKnight=$params->get('Jedi Knight');
$JediConsular=$params->get('Jedi Consular');
$Trooper=$params->get('Trooper');
$Smuggler=$params->get('Smuggler');

$JediKnightBlurb=$params->get('JediKnightBlurb');
$JediConsularBlurb=$params->get('JediConsularBlurb');
$TrooperBlurb=$params->get('TrooperBlurb');
$SmugglerBlurb=$params->get('SmugglerBlurb');

$ColorHigh=$params->get('Color High');
$ColorMedium=$params->get('Color Medium');
$ColorLow=$params->get('Color Low');
$ColorClosed=$params->get('Color Closed');
 
$content   = "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\">";
$content  .= "  <tbody>";

$content  .= "    <tr>";
$content  .= "      <td ><table border=\"0\" cellpadding=\"4\" cellspacing=\"0\" width=\"100%\">";
$content  .= "          <tbody>";
$content  .= "            <tr>";

	if ($RecruitmentStatus == "Closed"){
		$content  .= "              <td><div align=\"center\"><font class=\"content\"><b>Recruitment is currently <font color=\"$ColorClosed\">CLOSED!</font></b></font>";
	} else{  //open
		$content  .= "              <td><div align=\"center\"><font class=\"content\">We are currently looking for new members of the following classes: </font>";


	$content  .= "                  <hr>";
	$content  .= "                      <table id=\"table2\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
	$content  .= "                        <tbody>";
	$content  .= "                          <tr>";
	$content  .= "                            <td colspan=\"2\"><table id=\"table3\" border=\"0\">";
	$content  .= "                                <tbody>";
	$content  .= "                                  <tr>";
	$content  .= "                                    <td><font class=\"content\"><img src=\"modules/mod_recruitment/images/jediknight.png\" border=\"0\" width=\"38\" height=\"38\"></font></td>";
	$content  .= "                                    <td><font class=\"content\">Jedi Knight:</font></td>";
	$content  .= "                                  </tr>";
	$content  .= "                                </tbody>";
	$content  .= "                            </table></td>";

		if ($JediKnight == "High"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorHigh\">High</font></b></font></td>";
		} else if ($JediKnight == "Medium"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorMedium\">Medium</font></b></font></td>";
		} else if ($JediKnight == "Low"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorLow\">Low</font></b></font></td>";
		} else if ($JediKnight == "Closed"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorClosed\">Closed</font></b></font></td>";
		}
	$content  .= "                          </tr>";

	if ($JediKnightBlurb <> ""){
				$content  .= "                          <tr>";
				$content  .= "                            <td colspan=\"3\"><table id=\"table3\" border=\"0\">";
				$content  .= "                                <tbody>";
				$content  .= "                                  <tr>";
				$content  .= "                                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
				$content  .= "                                    <td valign=top><font color=\"#16839c\">Notes:&nbsp&nbsp</font></td>";
				$content  .= "                                    <td>$JediKnightBlurb</td>";
				$content  .= "                                  </tr>";
				$content  .= "                                </tbody>";
				$content  .= "                            </table></td></tr>";
		}


	$content  .= "                          <tr>";
	$content  .= "                            <td colspan=\"2\"><table id=\"table3\" border=\"0\">";
	$content  .= "                                <tbody>";
	$content  .= "                                  <tr>";
	$content  .= "                                    <td><font class=\"content\"><img src=\"modules/mod_recruitment/images/consular.png\" border=\"0\" width=\"38\" height=\"38\"></font></td>";
	$content  .= "                                    <td><font class=\"content\">Jedi Consular:</font></td>";
	$content  .= "                                  </tr>";
	$content  .= "                                </tbody>";
	$content  .= "                            </table></td>";

		if ($JediConsular == "High"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorHigh\">High</font></b></font></td>";
		} else if ($JediConsular == "Medium"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorMedium\">Medium</font></b></font></td>";
		} else if ($JediConsular == "Low"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorLow\">Low</font></b></font></td>";
		} else if ($JediConsular == "Closed"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorClosed\">Closed</font></b></font></td>";
		}

	$content  .= "                          </tr>";

	if ($JediConsularBlurb <> ""){
				$content  .= "                          <tr>";
				$content  .= "                            <td colspan=\"3\"><table id=\"table3\" border=\"0\">";
				$content  .= "                                <tbody>";
				$content  .= "                                  <tr>";
				$content  .= "                                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
				$content  .= "                                    <td valign=top><font color=\"#16839c\">Notes:&nbsp&nbsp</font></td>";
				$content  .= "                                    <td>$JediConsularBlurb</td>";
				$content  .= "                                  </tr>";
				$content  .= "                                </tbody>";
				$content  .= "                            </table></td></tr>";
	}

	$content  .= "                          <tr>";
	$content  .= "                            <td colspan=\"2\"><table id=\"table4\" border=\"0\">";
	$content  .= "                                <tbody>";
	$content  .= "                                  <tr>";
	$content  .= "                                    <td><font class=\"content\"><img src=\"modules/mod_recruitment/images/trooper.png\" border=\"0\" width=\"38\" height=\"38\"></font></td>";
	$content  .= "                                    <td><font class=\"content\">Trooper		:</font></td>";
	$content  .= "                                  </tr>";
	$content  .= "                                </tbody>";
	$content  .= "                            </table></td>";

		if ($Trooper == "High"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorHigh\">High</font></b></font></td>";
		} else if ($Trooper == "Medium"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorMedium\">Medium</font></b></font></td>";
		} else if ($Trooper == "Low"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorLow\">Low</font></b></font></td>";
		} else if ($Trooper == "Closed"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorClosed\">Closed</font></b></font></td>";
		}

	$content  .= "                          </tr>";

	if ($TrooperBlurb <> ""){
				$content  .= "                          <tr>";
				$content  .= "                            <td colspan=\"3\"><table id=\"table3\" border=\"0\">";
				$content  .= "                                <tbody>";
				$content  .= "                                  <tr>";
				$content  .= "                                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
				$content  .= "                                    <td valign=top><font color=\"#16839c\">Notes:&nbsp&nbsp</font></td>";
				$content  .= "                                    <td>$TrooperBlurb</td>";
				$content  .= "                                  </tr>";
				$content  .= "                                </tbody>";
				$content  .= "                            </table></td></tr>";
	}

	$content  .= "                          <tr>";
	$content  .= "                            <td colspan=\"2\"><table id=\"table5\" border=\"0\">";
	$content  .= "                                <tbody>";
	$content  .= "                                  <tr>";
	$content  .= "                                    <td><font class=\"content\"><img src=\"modules/mod_recruitment/images/smuggler.png\" border=\"0\" width=\"38\" height=\"38\"></font></td>";
	$content  .= "                                    <td><font class=\"content\">Smuggler:</font></td>";
	$content  .= "                                  </tr>";
	$content  .= "                                </tbody>";
	$content  .= "                            </table></td>";

		if ($Smuggler == "High"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorHigh\">High</font></b></font></td>";
		} else if ($Smuggler == "Medium"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorMedium\">Medium</font></b></font></td>";
		} else if ($Smuggler == "Low"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorLow\">Low</font></b></font></td>";
		} else if ($Smuggler == "Closed"){
			$content  .= "                            <td><font class=\"content\"><b><font color=\"$ColorClosed\">Closed</font></b></font></td>";
		}

	$content  .= "                          </tr>";

	if ($SmugglerBlurb <> ""){
				$content  .= "                          <tr>";
				$content  .= "                            <td colspan=\"3\"><table id=\"table3\" border=\"0\">";
				$content  .= "                                <tbody>";
				$content  .= "                                  <tr>";
				$content  .= "                                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
				$content  .= "                                    <td valign=top><font color=\"#16839c\">Notes:&nbsp&nbsp</font></td>";
				$content  .= "                                    <td>$SmugglerBlurb</td>";
				$content  .= "                                  </tr>";
				$content  .= "                                </tbody>";
				$content  .= "                            </table></td></tr>";
	}



	$content  .= "                        </tbody>";
	$content  .= "                      </table>";

	}
$content  .= "                      <hr>";
$content  .= "                      <font color=\"#16839c\">Notes:</font><br>$RecruitmentBlurb</div></td>";
$content  .= "            </tr>";
$content  .= "          </tbody>";
$content  .= "      </table></td>";
$content  .= "    </tr>";
$content  .= "  </tbody>";
$content  .= "</table>";


?>