function logoValidation() {
    var logoInput = document.getElementById('logo');
     
    var logoPath = logoInput.value;
 
    // Allowing logo type
    var allowedExtensions =/(\.jpg|\.jpeg|\.png)$/i;
     
    if (!allowedExtensions.exec(logoPath)) {
        alert("Invalid file type.");
        logoInput.value = '';
        return false;
    }
    
}