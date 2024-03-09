<html>
<head>
    <title>Registation form</title>
</head>
<body bgcolor="pink" >
    <div align="center">
<h1> REGISTATION FORM</h1>
<br/>
<form action="\REG\connect.php" method="post">
1.ROLL-NO <input type= "number" name="roll-no">
<br/>
2.COURSE name.<input type= "text" name="course"><br/>
4.FATHER'S NAME(Sh.)<input type="text" name="fathername">
<br/>
5.DATE OF BIRTH.:<select name ="Day">
<option value="select">select</option>
<option value="1">1</option>
<option value="2">1</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="Month">
<option value="select"></option>
    <option value="Jan"></option>
    <option value="Feb"></option>
    <option value="March"></option>
    <option value="April"></option>
    <option value="May"></option>
    <option value="June"></option>
    <option value="July"></option>
    <option value="Aug"></option>
    <option value="Sep"></option>
    <option value="Oct"></option>
    <option value="Nov"></option>
    <option value="Dec"></option>
</select>
<select name="Year">
<option value="1980"selected>1980</option>
    <option value="1981"selected>1981</option>
    <option value="1982"selected>1982</option>
    <option value="1983"selected>1983</option>
    <option value="1984"selected>1984</option>
    <option value="1985"selected>1985</option>
    <option value="1986"selected>1986</option>
    <option value="1987"selected>1987</option>
    <option value="1988"selected>1988</option>
    <option value="1989"selected>1989</option>
    <option value="1990"selected>1990</option>
    <option value="1991"selected>1991</option>
    <option value="1992"selected>1992</option>
    <option value="1993"selected>1993</option>
    <option value="1994"selected>1994</option>
    <option value="1995"selected>1995</option>
    <option value="1996"selected>1996</option>
    <option value="1997"selected>1997</option>
    <option value="1998"selected>1998</option>
    <option value="1999"selected>1999</option>
    <option value="2000"selected>2000</option>
    <option value="2001"selected>2001</option>
    <option value="2002"selected>2002</option>
    <option value="2003"selected>2003</option>
    <option value="2004"selected>2004</option>
    <option value="2005"selected>2005</option>
    <option value="2006"selected>2006</option>
    <option value="2007"selected>2007</option>
    <option value="2008"selected>2008</option>
    <option value="2009"selected>2009</option>
    <option value="2010"selected>2010</option>
    <option value="2011"selected>2011</option>
    <option value="2012"selected>2012</option>
    <option value="2013"selected>2013</option>
    <option value="2014"selected>2014</option>
    <option value="2015"selected>2015</option>
    <option value="2016"selected>2016</option>
    <option value="2017"selected>2017</option>
    <option value="2018"selected>2018</option>
    <option value="2019"selected>2019</option>
    <option value="2020"selected>2020</option>
    <option value="2021"selected>2021</option>
    <option value="2022"selected>2022</option>
    <option value="2023"selected>2023</option>
    <option value="2024"selected>2024</option>
   </select>
   <br/>
   6.SEXCODE.:
   <input name="gender" type= "radio" value="m" >Male
   <input name="gender" type= "radio" value="f" >Female
   <br/>
   7.QUALIFICATION:
   <select name="Qual">
    <option value="select">Select</option>
    <option value="DCA">DCA</option>
    <option value="BCA">BCA</option>
    <option value="MCA">MCA</option>
    <option value="PGDCA">PGDCA</option>
   </select>
   <BR/>
  ADDRESS:
  <textarea type="text"    name="address"  cols="60" rows="10" >sem</textarea>
<input type="submit" value="submit">
</form>
</div>
</body>
</html>