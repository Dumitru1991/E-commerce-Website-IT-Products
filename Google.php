

<!DOCTYPE html>
<html>

    <body>
        <script>
            'use strict';
                    let newWindow = open('https://accounts.google.com/signin/v2/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin', 'example', 'width=500,height=600')
                    newWindow.focus();
                    newWindow.onload = function() {
                    let html = ` < div style = "font-size:30px" > Welcome! < /div>`;
                            newWindow.document.body.insertAdjacentHTML('afterbegin', html);
                    };
        </script>
    </body>

</html>


