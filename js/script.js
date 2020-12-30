$(document).ready(function() {
    let num1 = '';
    let opr = '';
    let num2 = '';
    $('.keypad').on('click','.num', function() {
        num1 += $(this).text();
        $('.display').text(num1);
    });

    $('.keypad').on('click','.opr', function() {
        opr = $(this).text();
        num2 = num1;
        num1 = '';
        if (num2 != '') {
            $.ajax({
                url: 'action.php',
                method: 'POST',
                data: {num1:num1, num2:num2, opr:opr},
                success: function(res) {
                    console.log(res);
                }
            });
        }
    });

});