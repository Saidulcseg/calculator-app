<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saidul Islam made a Calculator using javascript </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<style>
*{
    margin: 0;padding: 0; box-sizing: border-box;
}

body{
    background-image: url(blue.jpg);
    background-size: 100% 100%;
}
.centercalcy{
    height: 100vh;
    display: flex;
    /*justify-content:center;*/
    align-items: center;
    margin-left:23% ;

}
form{
    width: 400px;
    height: 525px;
    box-shadow: 0 0 10px 4px rgb(14, 100, 199);
}
#app_name{
    width: inherit;
    font-size: 0.8rem;
    padding: 2px 0 2px 10px;
    /*background-color:#303030;*/
    background-color:#00001B;
    color: blanchedalmond;
    border: none;
    font-family: 'open sans',sans-serif;
}
#display-answer{
    width: inherit;
    height:100px ;
    /*background-color:#303030;*/
    background-color:#00001B;
    font-size: 2rem;
    color: white;
    text-align: right;
    outline: none;
    border: none;
}
.layer1{
    width: inherit;
    height: 90px;
    display: flex;
    justify-content: center;
}

.layer2{
    width: inherit;
    height: 40px;
    display: flex;
    justify-content: center;
}
input{
    flex: 1;
    font-size: 1.4rem;
    color: white;
    outline: none;
}
.main_num{
    background-color: #101011;
    border: 1px solid green;
}
.main_num:hover{
    
    background-color:black;

    /*background-color: #00001B;*/

    /*border: 1px solid green;/*#5167d6;*/
}
.operator{
    /*background-color: #303030;*/
    background-color:#00001B;
}
#clearbutton{
    font-size: 1rem;
}
input:hover{
    /*background-color:#474747 ;
    border: 1px solid gray;*/
    background:green;
}
</style>

</head>
<body>

    <div class="centercalcy">
        <form name="calcy">

            <input type="text" name="" value="calculator" id="app_name">

            <input type="text" name="answers" id="display-answer">

        <div class="layer2">
            <input type="button" name="" class="operator" value="C" id="clearbutton" onclick="calcy.answers.value='' ">

            <input type="button" name="" class="operator" value="=" onclick="calcy.answers.value=eval(calcy.answers.value)" >

            <INPUT type="button" value="⌫" name="backspace" 
            class="operator" 
            onclick="calcy.answers.value = calcy.answers.value.substring(0,calcy.answers.value.length*1 -1)">

        </div>

            <div class="layer1">

                <input type="button" name="" class="main_num" value="7" onclick="calcy.answers.value+='7' ">
                <input type="button" name="" class="main_num" value="8" onclick="calcy.answers.value+='8' ">
                <input type="button" name="" class="main_num" value="9" onclick="calcy.answers.value+='9' ">
                <input type="button" name="" class="operator" value="*" onclick="calcy.answers.value +='*' ">

            </div>

            <div class="layer1">

                <input type="button" name="" class="main_num" value="4" onclick="calcy.answers.value+='4' ">
                <input type="button" name="" class="main_num" value="5" onclick="calcy.answers.value+='5' ">
                <input type="button" name="" class="main_num" value="6" onclick="calcy.answers.value+='6' ">
                <input type="button" name="" class="operator" value="-" onclick="calcy.answers.value +='-' ">

            </div>

            <div class="layer1">

                <input type="button" name="" class="main_num" value="1" onclick="calcy.answers.value+='1' ">
                <input type="button" name="" class="main_num" value="2" onclick="calcy.answers.value+='2' ">
                <input type="button" name="" class="main_num" value="3" onclick="calcy.answers.value+='3' ">
                <input type="button" name="" class="operator" value="+" onclick="calcy.answers.value +='+' ">

            </div>

            <div class="layer1">

                <input type="button" name="" class="operator" value="." onclick="calcy.answers.value+='.' ">
                <input type="button" name="" class="main_num" value="0" onclick="calcy.answers.value+='0' ">
                <input type="button" name="" class="operator" value="%" onclick="calcy.answers.value+='%' ">
                <input type="button" name="" class="operator" value="/" onclick="calcy.answers.value +='/' ">

            </div>

        </form>

    </div>

    
</body>
</html>