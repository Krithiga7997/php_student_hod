$(document).ready(function () {
    $('#student_name').on('input', function () {
        var inputValue = $(this).val();
        // Regex to find any character that is NOT a letter (a-z, A-Z) or a space
        var cleanValue = inputValue.replace(/[^a-zA-Z ]/g, '');

        if (inputValue !== cleanValue) {
            $(this).val(cleanValue);
            $('#name-errorMsg').text('Only alphabets and spaces are allowed.');
        } else {
            $('#name-errorMsg').text('');
        }
    });

    $('#registration_no').on('input', function () {
        var inputValue = $(this).val();
        // Regex to find any character that is NOT a letter (a-z, A-Z) or a space
        var cleanValue = inputValue.replace(/[^a-zA-Z0-9 ]/g, '');

        if (inputValue !== cleanValue) {
            $(this).val(cleanValue);
            $('#reg-errorMsg').text('Only alpha-numeric are allowed.');
        } else {
            $('#reg-errorMsg').text('');
        }
    });

});
