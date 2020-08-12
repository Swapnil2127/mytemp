<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');


* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #c9c9c9;
  font-family: "Poppins" , sans-serif;
}

.background {
  height: 100vh;
  width: 150%;
  position: fixed;
  top: 0;
  bottom: 0;
  z-index: -11;
  clip-path: circle(60% at 90%);
}
.product-card {
  width: 800px;
  display: flex;
  background: white;
  box-shadow: 0 0 8px #000;
  border-radius: 40px;
}

.product-card .left-column {
  width: 50%;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.product-card .left-column img {
  width: 100%;
  transition: 0.3s ease;
}
.product-card .right-column {
  width: 50%;
  position: relative;
  overflow: hidden;
  padding: 2rem 1rem ;
  display: flex;
  flex-direction: column;
}
.product-card .right-column .product-name {
  text-transform: uppercase;
  font-weight: bold;
}
.product-card .right-column .product-name h1 {
  font-size: 2vw;
}
.product-card .right-column .price {
  font-size: 2rem;
  font-weight: bold;
}
.product-card .right-column .colors {
  display: flex;
}
.product-card .right-column .colors span:not(:last-child) {
  width: 20px;
  height: 20px;
  display: inline-block;
  border-radius: 50%;
  cursor: pointer;
  border: solid 2px #cacaca;
  transition: 0.3s ease;
  margin: 10px 5px;
}
.product-card .right-column .colors .darkblue {
  background: rgb(5,38,87);
}
.product-card .right-column .colors .darkblue:hover {
  border: solid 2px rgb(5,38,87);
}
.product-card .right-column .colors .quantity {
  font-size: 1.3rem;
  font-weight: bold;
  align-self: center;
  margin-left: 100px;
}
.product-card .right-column .colors .quantity input {
  border: none;
  outline: none;
  font-size: 1.3rem;
  font-weight: bold;
}
.product-card .right-column .btn {
  font-size: 1.5rem;
  cursor: pointer;
  background: linear-gradient(to right , #FF1605,#FF0095);
  color: #fff;
  border: none;
  outline: none;
  padding: 1.5vw;
  border-radius: 30px;
}
.product-card .right-column .btn:hover {
  box-shadow: 0 0 6px #000;
}

@media screen and (max-width:830px) {
  .product-card {
    width: 400px;
    height: 570px;
    flex-direction: column;
  }
  .product-card .left-column {
    width: 100%;
  }
  .product-card .left-column img {
    width: 60%;
  }
  .product-card .right-column {
    width: 100%;
  }
  .product-card .right-column .product-name h1 ,
  .product-card .right-column .btn {
    font-size: 1.2rem;
  }
  .product-card .right-column .colors .quantity {
    margin-left: 50px;
  }
}
@media screen and (max-width:400px) {
  .product-card {
    width: 300px;
    height: 520px;
  }
  .product-card .right-column .colors .quantity {
    margin-left: 20px;
  }
}

@media screen and (max-width:320px) {
  .product-card {
    width: 280px;
    height: 530px;
  }
}

</style>
