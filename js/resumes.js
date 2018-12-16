function getResume(id) {
    $.ajax({
        url: '/resume',
        type: 'POST',
        data: {
            id: id
        },
        success: function (data) {
            data = JSON.parse(data.resume)
            var file = new Blob([new Uint8Array(data.data.data)]);
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(file);
            a.href = url;
            a.download = data.name;
            a.click();
            window.URL.revokeObjectURL(url);
        },
        error: function () {
            console.log("getResume Failed")
        }
    });
}




$(function () {
    $.ajax({
        url: '/applicants',
        type: 'GET',
        success: function (data) {
            var $name, i, n = 1,
                total = data.length;
            $('<p>' + 'Total Applicants: ' + total + '<p>').appendTo($('#resumes'))
            for (i = 0; i < data.length; i++) {

                $name = $('<p class="col-md-1">' + n + '-' + '</p><ul class="text-center col-md-11 row">' + '<li class="col-md-6">' + '<span>' + "Name: " + '</span>' + $row["fullname"] + '</li>' +
                    '<li class="col-md-6">' + '<span>' + "Email: " + '</span>' + $row["email"] + '</li>' +
                    '<li class="col-md-6">' + '<span>' + "Phone Number: " + '</span>' + $row["email"] + '</li>' +
                    '<li class="col-md-6">' + '<span>' + "Nationality: " + '</span>' + $row["email"] + '</li>' +
                    '<li class="col-md-6">' + '<span>' + "City: " + '</span>' + $row["email"] + '</li>' +
                    '<li class="col-md-6">' + '<span>' + "Coding experiance: " + '</span>' + $row["email"] + '</li>' +
                    '<li class="col-md-6">' + '<span>' + "Years of experiance: " + '</span>' + $row["email"] + '</li>' +
                    '<li class="col-md-6">' + '<span>' + "Currently working: " + '</span>' + $row["email"] + '</li>' +
                    '<li class="col-md-6">' + '<span>' + "JavaScript Level: " + '</span>' + $row["email"] + '</li>' +
                    '<li class="col-md-6">' + '<span>' + "OOP Level: " + '</span>' + $row["email"] + '</li>' +
                    '<li class="col-md-6">' + '<span>' + "Github account link: " + '</span>' + $row["email"] + '</li>' +
                    '<li class="col-md-6" ' + 'onclick=' + 'getResume(' + '"' + $row["email"] + '"' + ')' + '>' + '<span>' + "Download resume: " + '</span>' + '<span class="download">' + $row["email"] + '</span></li>' +
                    '<li id="experiance" class="col-md-12">' + '<span>' + "A brief intro about work experience: " + '</span>' + $row["email"] + '</li></ul>'
                )
                n++
                $name.appendTo($('#resumes'))
            }
        },
        error: function () {
            alert.log("Error")
        }
    });
});