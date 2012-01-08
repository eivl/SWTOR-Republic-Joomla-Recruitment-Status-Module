<?php
/**
 * Helper class for Guild Recruitment module
 * 
 * 
 * 
 * 
 * @license        GNU/GPL, see LICENSE.php
 * mod_recruitment is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class modRecruitmentHelper
{
    /**
     * 
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    function getRecruit( $params )
    {
        return
			$RecruitmentStatus=$params->get('RecruitmentStatus');
			$RecruitmentBlurb=$params->get('RecruitmentBlurb');
			
			$SithWarrior=$params->get('Jedi Knight');
			$SithInquisitor=$params->get('Jedi Consular');
			$BountyHunter=$params->get('Trooper');
			$ImperialAgent=$params->get('Smuggler');
			
			$SithWarriorBlurb=$params->get('JediKnightBlurb');
			$SithInquisitorBlurb=$params->get('JediConsularBlurb');
			$BountyHunterBlurb=$params->get('TrooperBlurb');
			$ImperialAgentBlurb=$params->get('SmugglerBlurb');


    }
}

?>