// времянка, пока не будет аутентификации на вью
$(document).ready(function () {

    $('form').on('submit', function () {

        let fields = {
            email:  $('#email').val(),
            password: $('#password').val()
        }

        axios.post('/login', fields)
            .then(response => {
                localStorage.setItem('access_token', response.data.token);
            })
            .catch(error => {
                console.log(error)
            })

    });

    $('a[href*="logout"]').on('click', function () {
        localStorage.removeItem('access_token');
    });

});
