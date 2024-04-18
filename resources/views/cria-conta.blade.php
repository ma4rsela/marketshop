        <x-layout_base>
        <!DOCTYPE html>   
    <html>   
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Login Page </title>  
    <style>   
    Body {  
    font-family: Calibri, Helvetica, sans-serif;  
    background-color: white;  
    }  
    button {   
        background-color:#fbec5d;   
        width: 50%;  
            color: white;   
            padding: 10px;   
            margin: 10px 0px;   
            border: none;   
            cursor: pointer;   
            }   
    form {   
            border: 130px solid black;   
        }   
    input[type=text], input[type=password] {   
            width: 100%;   
            margin: 8px 0;  
            padding: 12px 20px;   
            display: inline-block;   
            border: 2px white;   
            box-sizing: border-box;   
        }  
    button:hover {   
            opacity: 0.7;   
        }   
    .cancelbtn {   
            width: auto;   
            padding: 10px 10px;  
            margin: 10px 30px;  
        }   
            
        
    .container {   
            padding: 60px;   
            background-color: #a9a9a9;  
        }   
    </style>   
    </head>    
    <body>    
   
        <form>  
            <div class = flex center >
            <img src="https://media.istockphoto.com/id/1501348253/pt/foto/golden-retriever-and-british-shorthair-cat-lying-together-under-blanket.webp?b=1&s=170667a&w=0&k=20&c=CSFgixATT-J7_LviEKQTgK-savfz-s3MAiIXFpQ8RAk=" class="w-rounded" />
            <div class="container">   
                <label>Username : </label>   
                <input type="text" placeholder="Enter Username" name="username" required>  
                <label>Senha : </label>   
                <input type="password" placeholder="Enter Password" name="password" required>  
                <label>Email : </label>   
                <input type="text" placeholder="Enter Email" name="Email" required>  
                <button type="submit">Login</button>   
                <input type="checkbox" checked="checked"> Lembre-se  
                <button type="button" class="cancelbtn"> Cancelar</button>   
            Esqueci a <a href="#"> Senha </a>  
            
            </div>   
        </form>     
    </body>     
    </html>  

        </x-layout_base>
