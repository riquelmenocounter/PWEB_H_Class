function validateForm(form, method) {
    if (form.fname.value === "" || form.lname.value === "" || form.email.value === "" || form.pesan.value === "") {
        alert("Mohon untuk mengisi terlebih dahulu!"); 
        return false;
    } else {
        alert("Terimakasih telah mengisi formulir" + method + "!"); 
        return true;
    }
}