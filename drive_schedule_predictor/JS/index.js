$(document).ready(function () {
    $('#validateButton').bind('click', function () {
        validateInputs($('#carPlate').val(), $('#date').val(), $('#time').val());
    });
});
function validateDrivingSchedule(car_plate, date, time)
{
    $.ajax({
        type: "POST",
        url: "validateDrivingSchedule.php",
        dataType: "json",
        data: {
            car_plate: car_plate,
            date: date,
            time: time
        },
        success: function (data) {
            if (data.success)
            {
                swal({
                    title: 'The car with the entered plate , can circulate on the entered date and time',
                    text: "This message will close automatically",
                    timer: 4000,
                    type: 'success',
                    showConfirmButton: false
                });
            } else {
                swal({
                    title: 'The car with the entered plate , can´t circulate on the entered date and time',
                    text: "This message will close automatically",
                    timer: 4000,
                    type: 'error',
                    showConfirmButton: false
                });
            }
        }
    });
}

function validateInputs(car_plate, date, time)
{
    if (car_plate && date && time)
    {
        var isValidInput = /([A-Z]{3}-[0-9]{3,4})/.test(car_plate);
        if (isValidInput) {
            validateDrivingSchedule(car_plate, date, time);
        } else {
            swal({
                title: 'Invalid Plate Number, Please use one of these formats: AAA-0000, AAA-000',
                text: "This message will close automatically",
                timer: 4000,
                type: 'error',
                showConfirmButton: false
            });
        }
    } else {
        swal({
            title: 'Plate Number,  Date & Time are mandatory.',
            text: "This message will close automatically",
            timer: 3000,
            type: 'error',
            showConfirmButton: false
        });
    }

}
