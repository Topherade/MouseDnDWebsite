$(document).ready(function() {

    $("#ItemType").change(function() {
        var val = $(this).val();
        if (val == "Weapon") {
            $("#ItemSubtype").html("<option value='test'>item1: test 1</option><option value='test2'>item1: test 2</option>");
        } else if (val == "Armor") {
            $("#ItemSubtype").html("<option value='test'>item2: test 1</option><option value='test2'>item2: test 2</option>");

        } else if (val == "Equipment") {
            $("#ItemSubtype").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");

        }else if (val == "Magic Item") {
            $("#ItemSubtype").html("<option value='test'>item4: test 1</option><option value='test2'>item3: test 2</option>");

        }else if (val == "Trade Goods") {
            $("#ItemSubtype").html("<option value='test'>item5: test 1</option><option value='test2'>item3: test 2</option>");

        }else if (val == "Livestock") {
            $("#ItemSubtype").html("<option value='test'>item6: test 1</option><option value='test2'>item3: test 2</option>");

        }else if (val == "Transportation") {
            $("#ItemSubtype").html("<option value='test'>item7: test 1</option><option value='test2'>item3: test 2</option>");

        }
        
    });


});
