const valider = function (form) {
    
    fetch(`./database/fonctionVerification.php?Name=${form.Nom.value}`)
    .then(response => {
        sessionStorage.setItem("User", form.Nom.value); 
    
    })
    .catch(error => {
        alert(error);
    });
    return false
}