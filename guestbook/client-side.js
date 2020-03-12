document.getElementById("guestbookform").onsubmit = validate;
/**
function validate()
{
    let valid = true;

    //clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i=0; i < errors.length; i++)
    {
        errors[i].style.visibility = "hidden";
    }

    //Check first name
    let first = document.getElementById("firstN").value;
    if (first == "")
    {
        let errFirst = document.getElementById("errFirst");
        errFirst.style.visibility = "visible";
        valid = false;
    }

    //Check last name
    let last = document.getElementById("lastN").value;
    if (last == "") {
        let errLast = document.getElementById("errLast");
        errLast.style.visibility = "visible";
        valid = false;
    }



    let test = document.getElementById("email").checked;
    if(test)
    {
        let email = document.getElementById("emailAddress").value;
        if(email == "")
        {
            let errEmail = document.getElementById("errEmail");
            errEmail.style.visibility = "visible";
            valid = false;
        }

        else
        {
            let validE = validateEmail(email);
            if(validE == false)
            {
                let errEmail = document.getElementById("errValidEmail");
                errEmail.style.visibility = "visible";
                valid = false;
            }
        }
    }

    function validateEmail(email)
    {
        let symbols = /\S+@\S+\.\S+/;
        return symbols.test(email);
    }

    let linkedin = document.getElementById("linkedin").value;
    if(!linkedin.startsWith("http") || !linkedin.includes( ".com"))
    {
        let errlinkedIn = document.getElementById("errUrl");
        errlinkedIn.style.visibility = "visible";
        valid = false;
    }

    let Met = document.getElementById("met").value;
    if(Met == "none")
    {
        let errMet = document.getElementById("errMet");
        errMet.style.visibility = "visible";
        valid = false;
    }

    return valid;
}
**/

function showType()
{
    let change = document.getElementById("mailType");

    if(document.getElementById('email').checked)
    {
        jQuery('#mailType').show();
        change.style.visibility = "visible";
    }
    else
    {
        jQuery('#mailType').hide();
        change.style.visibility = "hidden";
    }
}
