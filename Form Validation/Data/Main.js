function RegisterValidation() {
    if (document.register_form.user_first_name.value == "") {
        alert("First name is Required");
        document.register_form.user_first_name.focus();
        return false;
    } else if (document.register_form.user_last_name.value == "") {
        alert("Last name is Required");
        document.register_form.user_last_name.focus();
        return false;
    } else if (document.register_form.user_email.value == "") {
        alert("E-mail is Required");
        document.register_form.user_email.focus();
        return false;
    } else if (document.register_form.user_ID.value == "") {
        alert("Your ID is Required");
        document.register_form.user_ID.focus();
        return false;
    } else if (document.register_form.user_password.value == "") {
        alert("User Password is Required");
        document.register_form.passid.focus();
        return false;
    } else if (document.register_form.user_password.value != document.registration.user_password_temp.value) {
        alert("Rewrite Password is Required");
        document.register_form.passid.focus();
        return false;
    } else if (document.register_form.user_region.value == "") {
        alert("Region is Required");
        document.register_form.user_region.focus();
        return false;
    } else if (document.register_form.user_birthday_day.value == "") {
        alert("Birthday day is Required");
        document.register_form.user_birthday_day.focus();
        return false;
    } else if (document.register_form.user_birthday_month.value == "") {
        alert("Birthday month is Required");
        document.register_form.user_birthday_month.focus();
        return false;
    } else if (document.register_form.user_birthday_year.value == "") {
        alert("Birthday year is Required");
        document.register_form.user_birthday_year.focus();
        return false;
    } else if (document.register_form.user_post_code.value == "") {
        alert("Post code is Required");
        document.register_form.user_post_code.focus();
        return false;
    }

    //    var r = confirm("Do You Want to Save?");
    //    if (r == true) {
    //        return true;
    //    } else {
    //        return false;
    //    }
}


function SigninValidation() {
    if ((document.login_form.admin_ID.value == "") && (document.login_form.admin_password.value == "")) {
        alert("Please give your ID/E-mail and password...");
        document.login_form.admin_ID.focus();
        return false;
    } else if (document.login_form.admin_ID.value == "") {
        alert("Please give your ID/E-mail...");
        document.login_form.admin_ID.focus();
        return false;
    } else if (document.login_form.admin_password.value == "") {
        alert("User Password is Required");
        document.login_form.admin_password.focus();
        return false;
    }



    //    var r = confirm("Do You Want to Save?");
    //	if (r == true) {
    //		return true;
    //	}else {
    //		return false;
    //	}
}
