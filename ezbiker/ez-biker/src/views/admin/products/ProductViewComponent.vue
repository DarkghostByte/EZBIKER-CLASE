<template>
  <div class="container">
    <div class="wrap" :data-pos="currentPos">
      <div class="wrap-clip" :style="{ backgroundColor: getColor(currentPos) }"></div>
      <div class="content">
        <div class="top">
          <div class="menu">
            <router-link to="/admin/view">DEPORTIVAS</router-link>
            <router-link to="/admin/view-naked">NAKED</router-link>
            <a href="#" @click.prevent="changePosition(2)">ENDURO</a>
            <a href="#" @click.prevent="changePosition(3)">R6</a>
          </div>
        </div>
        <div class="bar">
          <div class="cart">
            <i class="zmdi zmdi-shopping-cart"></i>
            <div class="badge">
              <span>{{ cartCount }}</span>
            </div>
          </div>
          <div class="product-images">
            <img :src="productImages[0]" class="shoe" @click.prevent="changePosition(0)"/>
            <img :src="productImages[1]" class="shoe" @click.prevent="changePosition(1)"/>
            <img :src="productImages[2]" class="shoe" @click.prevent="changePosition(2)"/>
            <img :src="productImages[3]" class="shoe" @click.prevent="changePosition(3)"/>
            <img :src="productImages[4]" class="shoe" @click.prevent="changePosition(4)"/>
          </div>
        </div>
        <div class="products">
          <div class="products-wrap" :style="{ transform: `rotateY(${getRotation(currentPos)}deg)` }">
            <div v-for="product in products" :key="product.id" class="item">
              <div class="title" :style="{ color: getColor(currentPos) }">{{ product.title }}</div>
              <div class="image">
                <img :src="product.image" class="shoe" alt="">
              </div>
              <div class="info">
                <h2>{{ product.brand }}</h2>
                <h3>{{ product.price }}</h3>
                <p>{{ product.description }}</p>
                <button type="button" class="btn" @click="addToCart(product)">
                  <span class="material-symbols-outlined">add_shopping_cart</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

    
    <script>
export default {
  data() {
    return {
      currentPos: 0,
      cartCount: 0,
      products: [
        { 
          id: 1, 
          title: 'KTM', 
          image: 'https://mototres.mx/wp-content/uploads/2023/05/PHO_BIKE_90_RE_RC390-BLUE-MY22-90-Right-MY23-Studio_SALL_AEPI_V1-1.png', 
          brand: 'RC 390', 
          price: '$138,000.00', 
          description: 'La KTM RC 390 2024 es una máquina superdeportiva de alto rendimiento, con unas sólidas raíces de moto de circuito. Con un impresionante paquete tecnológico de componentes, así como un estilo derivado de la competición.' 
        },

        { 
          id: 2, 
          title: 'KAWASAKI', 
          image: 'https://storage.kawasaki.eu/public/kawasaki.eu/en-EU/model/19ZX1000Y_201GY3DRS1CG_A.png', 
          brand: 'NINJA H2R', 
          price: '$849,990.00', 
          description: 'Las motocicletas Ninja H2 y Ninja H2 Carbon llevan el poder alucinante del superdeportivo de carreras de Kawasaki a la calle. Con un potente motor de cuatro cilindros en línea de 998 cc, electrónica de última generación y los últimos frenos Brembo, los Ninja H2 y Ninja H2 Carbon equivalen a un rendimiento puro en la carretera.' 
        
        },

        { 
          id: 3, 
          title: 'SUZUKI', 
          image: 'https://motosureste.com.mx/wp-content/uploads/2024/01/negrodorado.png', 
          brand: 'HAYABUSA', 
          price: '$459,490.00', 
          description: 'Emociónate y encuentra un increíble poder con Hayabusa 2024. Una Suzuki que te ofrece la mejor tecnología y desempeño para tu camino. Obtén una experiencia superior de manejo y vive al máximo su poder incomparable. ' 
        },

        { id: 4, 
          title: 'CF MOTO', 
          image: 'https://static.wixstatic.com/media/a619e9_b0eb41e297ef46ceabc657ff88a0d2c1~mv2.png/v1/fill/w_974,h_567,al_c,q_90,enc_auto/a619e9_b0eb41e297ef46ceabc657ff88a0d2c1~mv2.png', 
          brand: '450 SRS', 
          price: '$144,800.00', 
          description: 'La 450SR S enciende cada centímetro de tu cuerpo con una oleada de adrenalina, a medida que el diseño aerodinámico evolutivo desata su potencia para esculpir ese segundo extra. Pisa el acelerador al máximo, juega con la velocidad, maniobra sin esfuerzo por las calles y pistas, conquistando cada curva en una postura de zambullida.' 
        },
        { id: 5, 
          title: 'YAMAHA', 
          image: 'https://i.pinimg.com/originals/93/b5/1c/93b51c0c18b4a254acc0af94c7eb1a27.png', 
          brand: 'YZF-R6', 
          price: '$120,000.00', 
          description: 'Ya desde sus inicios, la YZF-R1 se ha fabricado sin renunciar a nada, y es precisamente esta filosofía de diseño lo que convierte a esta Yamaha en la moto superdeportiva más emocionante de nuestro tiempo.' 
        },
      ],
      productImages: [
        'https://mototres.mx/wp-content/uploads/2023/05/PHO_BIKE_90_RE_RC390-BLUE-MY22-90-Right-MY23-Studio_SALL_AEPI_V1-1.png',
        'https://storage.kawasaki.eu/public/kawasaki.eu/en-EU/model/19ZX1000Y_201GY3DRS1CG_A.png',
        'https://motosureste.com.mx/wp-content/uploads/2024/01/negrodorado.png',
        'https://static.wixstatic.com/media/a619e9_b0eb41e297ef46ceabc657ff88a0d2c1~mv2.png/v1/fill/w_974,h_567,al_c,q_90,enc_auto/a619e9_b0eb41e297ef46ceabc657ff88a0d2c1~mv2.png',
        'https://i.pinimg.com/originals/93/b5/1c/93b51c0c18b4a254acc0af94c7eb1a27.png'
      ]
    };
  },
  methods: {
    changePosition(pos) {
      this.currentPos = pos;
    },
    getColor(pos) {
      switch (pos) {

        case 0:
          return '#ff5500';

        case 1:
          return '#43a537';

        case 2:
          return '#002cbf';

          case 3:
          return '#009eb8';

          case 4:
          return '#040056';

        default:
          return '#333';
      }
    },
    getRotation(pos) {
      return pos * -72;
    },
    addToCart(product) {
      console.log('Añadir producto al carrito:', product);
      // Implementar la lógica para agregar el producto al carrito (por ejemplo, almacenar en localStorage o en una base de datos)
      this.cartCount++;
    }
  }
};
</script>

    
    <style>

    body { 
	/*background: #ff0000;*/
	font-family: 'Roboto', 'Segoe UI', Tahoma;
}

.wrap {
	position: absolute;
	width: 82%;
	height: 100%;
	background-color: #e5e5e5;
	display: flex;
	align-items: center;
	justify-content: center;
}

/** With clip-path (It doesn't work on Firefox) **/
/*.wrap-clip {
	position: absolute;
	top: 0;
	bottom: 0;
	width: 100%;
	height: 100%;
	background-color: #607D8B;
	-webkit-clip-path: polygon(0 25%, 0% 100%, 75% 100%);
	clip-path: polygon(0 25%, 0% 100%, 75% 100%);
	transition: all 0.8s ease-in-out;
}*/

.wrap-clip {
  position: absolute;
	top: 0;
	bottom: 0;
	width: 100%;
	height: 100%;
	background-color: #607D8B;
	-webkit-clip-path: polygon(0 25%, 0% 100%, 75% 100%);
	clip-path: polygon(0 25%, 0% 100%, 75% 100%);
	transition: all 0.8s ease-in-out;
}

.content {
  margin: 0 auto;
	position: relative;
	width: calc(100% - 140px);
	height: calc(100% - 100px);			
	box-shadow: 0 0 12px rgba(0,0,0,.25);
	z-index: 100;
  
}

.content .bar {
	position: absolute;
    top: 5px;
    right: 5px;
	height: calc(100% - 10px);
    width: 70px;
    background-color: rgba(0,0,0,.05);
    z-index: 10;
    padding-left: 10px;
}

.content .bar > * { display: block; text-align: center; }

.content .bar img { width: 48px; margin-bottom: 5px; transition: all .8s ease-in-out; padding-top: 10px;}

.content .bar a:hover img { transform: scale(-1,1); transition: all .4s ease-in-out; }

.content .top {
	position: absolute;
    top: 5px;
    left: 5px;
	width: calc(100% - 80px);
	height: 40px;
    z-index: 10;
}

.menu {
	padding: 20px;
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: flex-end;
  text-align: right;
}

.menu a {
	margin-right: 40px;
	font-weight: 600;
	font-size: 14px;
	text-decoration: none;
	color: #000000;
}

.shoe {
	width: 80%;
  transform: rotate(0deg);
}

.image { margin-left: 120px; height: 850px; width: 700px; margin-top: 85%;}

.info { 
	width: 250px; 
	color: #333;
}

.info p {
  margin-top: 10px;
  margin-right: 20px;
	text-align: left;
	line-height: 1.5;
	font-size: 11px; 
	color: #444; 
}

.info button { 
	margin-top: 25px; 
	margin-bottom: 20px;
	width: 80%;
}

.info h2, .info h3 { margin: 5px 0; }
.info h2 { font-size: 28px; }

.info button i { font-size: 24px; }

.item .title {
	position: absolute;
    top: 80px;
    left: 120px;
	font-family: 'Cuprum', 'Roboto', Tahoma;
    font-size: 100px;  
    font-weight: 500;   
    color: #212122;
}


.cart {
	position: relative;
	padding: 5px;
    margin-bottom: 15px;
	font-size: 24px;
	text-align: center;
    color: #777; 
}

.products {
	width: 820px;
	height: 100%;
	position: relative;
	perspective: 1000px;
}

.products-wrap {
	position: absolute;
	width: 100%;
	height: 100%;
	transform-style: preserve-3d;
	transition: transform 0.5s ease-in-out;
}

.item {
	margin: 0;
	position: absolute;
	top: 10px;
	left: 10px;
	width: calc(100% - 20px);
	height: calc(100% - 20px);
	display: none;
	align-items: center;
	backface-visibility: hidden;
}

.products-wrap .item:nth-child(1) { transform: rotateY(0deg) translateZ(310px); display: flex;  }
.products-wrap .item:nth-child(2) { transform: rotateY(72deg) translateZ(310px); display: flex; }
.products-wrap .item:nth-child(3) { transform: rotateY(144deg) translateZ(310px); display: flex; }
.products-wrap .item:nth-child(4) { transform: rotateY(216deg) translateZ(310px); display: flex; }
.products-wrap .item:nth-child(5) { transform: rotateY(288deg) translateZ(310px); display: flex; }

.wrap[data-pos="0"] .products-wrap {
  -webkit-transform: translateZ(-310px) rotateY(0deg);
          transform: translateZ(-310px) rotateY(0deg);
}
.wrap[data-pos="1"] .products-wrap {
  -webkit-transform: translateZ(-310px) rotateY(-72deg);
          transform: translateZ(-310px) rotateY(-72deg);
}
.wrap[data-pos="2"] .products-wrap {
  -webkit-transform: translateZ(-310px) rotateY(-144deg);
          transform: translateZ(-310px) rotateY(-144deg);
}

.wrap[data-pos="3"] .products-wrap {
  -webkit-transform: translateZ(-310px) rotateY(-216deg);
          transform: translateZ(-310px) rotateY(-216deg);
}

.wrap[data-pos="4"] .products-wrap {
  -webkit-transform: translateZ(-310px) rotateY(-288deg);
          transform: translateZ(-310px) rotateY(-288deg);
}



.wrap[data-pos="0"] .menu a:hover { color: #ff5500; }
.wrap[data-pos="1"] .menu a:hover { color: #F44336 }
.wrap[data-pos="2"] .menu a:hover { color: #2196F3 }
.wrap[data-pos="3"] .menu a:hover { color: #212122 }

.btn {
	padding: 0;
	position: relative;
	display: block;
	overflow: hidden;
	border-width: 0;
	outline: none;
	border-radius: 2px;
	box-shadow: 0 1px 4px rgba(0, 0, 0, .6);
	background-color: #333333;
	color: #ecf0f1;
	transition: background-color .3s;
}

.btn:hover, .btn:focus { background-color: #646464; }
.btn > * { position: relative; }

.btn span {
  display: block;
  padding: 8px 24px;
}

.btn:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  display: block;
  width: 0;
  padding-top: 0;
  border-radius: 100%;
  background-color: rgba(236, 240, 241, .3);
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.btn:active:before {
  width: 120%;
  padding-top: 120%;
  transition: width .2s ease-out, padding-top .2s ease-out;
}

.badge {
	padding: 3px 7px;
  position: absolute;
	right: 10px;
	top: 0;
	display: inline-block;
	background-color: #F44336;
	border-radius: 50px;
	font-size: 11px;
	font-weight: 700;
	color: #fff;	
  margin-right: 15px;
  margin-top: 10px;
}

.badge:before {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  width: 100%;
  height: 100%;
  border: dotted #F44336 2px;
  border-radius: 20px;
  opacity: 0;
}

.cart.add .badge { animation: pulse 1.5s 1; }
.cart.add .badge:before { animation: sonar 1.5s 1; }

@keyframes sonar { 
  0% {transform: scale(.9); opacity:1;}
  100% {transform: scale(2);opacity: 0;}
}

@keyframes pulse {
  0% {transform: scale(1);}
  20% {transform: scale(1.4);} 
  50% {transform: scale(.9);} 
  80% {transform: scale(1.2);} 
  100% {transform: scale(1);}
}
    </style>
    