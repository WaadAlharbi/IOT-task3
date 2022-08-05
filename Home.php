<!DOCTYPE html>
<html>
<body>
  <style>
    .page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
  }
  .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  }
  .but {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #43A047;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
}
.but:hover,.but:active,.but:focus {
  background: #43A047;
}
  body {
    background: #76b852;
    background: rgb(141,194,111);
    background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  </style>

<div class="page">
  <div class="form">
    <form class="num" action="returns.php" method="GET">
      <input type="number" placeholder="number" value="number" name="number"/>
      <input class="but" type="submit" value="Submit" name="Submit">
    </form>
  </div>
</div>
</body>
</html>
