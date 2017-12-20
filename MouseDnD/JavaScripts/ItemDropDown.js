$(document).ready(function() {

    $("#ItemType").change(function() {
        var val = $(this).val();
        if (val == "Weapon") {
            $("#ItemSubtype").html("<option value='Simple Melee'>Simple Melee</option><option value='Martial Melee'>Martial Melee</option><option value='Simple Ranged'>Simple Ranged</option><option value='Martial Ranged'>Martial Ranged</option>");
        
		} else if (val == "Armor") {
            $("#ItemSubtype").html("<option value='Cloth'>Cloth</option><option value='Light'>Light</option><option value='Medium'>Medium</option><option value='Heavy'>Heavy</option>");

        } else if (val == "Equipment") {
            $("#ItemSubtype").html("<option value='Common'>Common</option><option value='Uncommon'>Uncommon</option><option value='Rare'>Rare</option><option value='Epic'>Epic</option><option value='Legendary'>Legendary</option>");

        }else if (val == "Magic Item") {
            $("#ItemSubtype").html("<option value='Common'>Common</option><option value='Uncommon'>Uncommon</option><option value='Rare'>Rare</option><option value='Epic'>Epic</option><option value='Legendary'>Legendary</option>");

        }else if (val == "Trade Goods") {
            $("#ItemSubtype").html("<option value='Common'>Common</option><option value='Uncommon'>Uncommon</option><option value='Rare'>Rare</option><option value='Epic'>Epic</option><option value='Legendary'>Legendary</option>");

        }else if (val == "Livestock") {
            $("#ItemSubtype").html("<option value='Standard'>Standard</option><option value='Grasshopper'>Grasshopper</option><option value='Spider'>Spider</option><option value='Ant'>Ant</option>");

        }else if (val == "Transportation") {
            $("#ItemSubtype").html("<option value='Land'>Land</option><option value='Sea'>Sea</option><option value='Air'>Air</option>");

        }
        
    });


});
