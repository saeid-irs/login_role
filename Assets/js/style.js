$(document).ready(function () {

    $("#R_send").click(function (e) {
        let name = $("#R_fullName").val();
        let email = $("#R_email").val();
        let password = $("#R_password").val();
        let phone = $("#R_phoneNumber").val();
        let repeatPass = $("#R_repeatPassword").val();

        if (name !== "" || email !== "" || password !== "") {
            if (password === repeatPass) {
                insert(name, email, password, phone);
                $("#Registration").attr("action", "logIn.php");
            } else {
                alert("Password and repeat password are not equal");
            }
        } else {
            alert("Enter the required values");
        }
    });

    function insert(name, email, password, phone) {
        $.ajax({
            method: "POST",
            url: "Assets/php/Insert.php",
            data: { Name: name, Email: email, Pssword: password, Phone: phone },
            success: function (val) {
                alert("You have successfully registered. \n" + val);
            }
        });
    }

    $("#edit").click(function (e) {
        $("#box_edit_form").toggleClass("d_none");
    });

    $(".close").click(function (e) {
        $("#box_edit_form").toggleClass("d_none");
    });
});