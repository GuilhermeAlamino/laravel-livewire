<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>@yield('title') - ZR System</title>

    <style>
        body {
            width: 100%;
            height: 100%;
            padding: 0px;
            margin: 0px;
        }


        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 1024px) {
            form.form-list {
                display: grid;
                align-content: center;
            }

            .form-list-index {
                display: grid;
                align-content: center;
                overflow: auto !important;
            }

        }

        form.form-list {
            display: grid;
            align-content: center;
        }

        .form-list-index {
            display: grid;
            align-content: center;
            overflow: auto !important;
        }

        /* not found style */
        .flex-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            animation: colorSlide 15s cubic-bezier(0.075, 0.82, 0.165, 1) infinite;

            .text-center {
                text-align: center;

                h1,
                h3 {
                    margin: 10px;
                    cursor: default;

                    .fade-in {
                        animation: fadeIn 2s ease infinite;
                    }
                }

                h1 {
                    font-size: 8em;
                    transition: font-size 200ms ease-in-out;
                    border-bottom: 1px dashed white;

                    span#digit1 {
                        animation-delay: 200ms;
                    }

                    span#digit2 {
                        animation-delay: 300ms;
                    }

                    span#digit3 {
                        animation-delay: 400ms;
                    }
                }

                button {
                    border: 1px solid white;
                    background: transparent;
                    outline: none;
                    padding: 10px 20px;
                    font-size: 1.1rem;
                    font-weight: bold;
                    color: white;
                    text-transform: uppercase;
                    transition: background-color 200ms ease-in;
                    margin: 20px 0;

                    &:hover {
                        background-color: white;
                        color: #555;
                        cursor: pointer;
                    }
                }
            }
        }

        @keyframes colorSlide {
            0% {
                background-color: #152a68;
            }

            25% {
                background-color: royalblue;
            }

            50% {
                background-color: seagreen;
            }

            75% {
                background-color: rgb(253, 54, 18);
            }

            100% {
                background-color: #152a68;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            ;

            100% {
                opacity: 1;
            }
        }

        /* not found */
    </style>
</head>

<body>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>