<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>


            .content{
                width: 80%;
                height: 50%;
                margin: 80px 80px 0px 120px;
                padding: 50px;
                text-align: center;
                background-color:white;
            }
            .fom{
                width: 100%;
                height: 100%;
                margin: 50px 90px 50px 280px;

            }

            .location{
                width: 100%;
                height:100%;
                background-color:white;
                margin: 90px 20px 0px 0px;
            }

            .infos{
                margin-left: 400px;
                margin-bottom: 80px;
            }

    </style>
    <script src="{{asset('js/app.js')}}"> </script>

</head>
<body>

<div class="content">
    <div class="form"> 
        <form>
                <h1>Contact nous</h1>
                <hr style="border: 2px solid;">
                <h4>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</h4>
                <hr style="border: 2px solid;">
                <div>
                <table class="infos">
                    <tr>
                        <tr>
                            <td><label>Nom </label></td>
                            <td><input type="text" name="nom" placeholder="Votre nom"><br></td>
                        </tr>
                        <tr>
                            <td><label>Prenom </label></td>
                            <td><input type="text" name="prenom" placeholder="Votre prenom"><br></td>
                        </tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td><input type="text" name="email" placeholder="Votre Email"><br></td>
                        </tr>
                        <tr>
                            <td><label>Object</label></td>
                            <td><input type="text" name="object" placeholder="Votre object"><br></td>
                        </tr>
                        <tr>
                            <td><label>Message</label></td>
                            <td><textarea name="message" placeholder="Votre message "></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                     <button type="submit" name="Envoyer" >Envoyer</button>

                            </td>
                        </tr>
                    </tr>
                    </table>
                    <table>
                    <h1 style="margin-bottom: 30px;">Nos cordonnees</h1>
                    <tr>
                        <td>
                            <img src="{{asset('photo/Icon/adresse.png')}}" style="width: 80px;height:80px">
                        </td>
                        <td>
                            <img src="{{asset('photo/Icon/phone.png')}}" style="width: 80px;height:80px">
                        </td>
                        <td>
                            <img src="{{asset('photo/Icon/email.png')}}" style="width: 80px;height:80px">
                        </td>
                    </tr>
                    <hr>
                    <tr>
                        <td style="width: 400px;">
                             Quartier VICTORIA, Casablanca, Morocco
                        </td>
                        <td style="width: 400px;">
                             +212.05.90.78.34.78
                        </td>
                        <td style="width: 400px;">
                             weenzee@gmail.com
                        </td>
                    </tr>
                    </table>
                </div>
            </form>

            <div class="location">
                    <img  src="{{asset('photo/Carousel/cover2.jpg')}}">
            </div>

    </div>

    
</div>

    
</body>
</html>