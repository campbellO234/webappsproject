function create_login(choice) 
{

    var createAccount = document.getElementById('createAccount');
    var loginAccount = document.getElementById('loginAccount');

    if (choice === 1) 
    {
        createAccount.style.display = 'block';
        loginAccount.style.display = 'none';
    } 

    else if (choice === 2) 
    {
        createAccount.style.display = 'none';
        loginAccount.style.display = 'block';
    } 

    else 
    {
        createAccount.style.display = 'none';
        loginAccount.style.display = 'none';
    }
}


