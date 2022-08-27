
<div class="wrapper" style="width: 60%">
  <div class="name">
    Emily Sloan
  </div>
  <div class="content">
    <h2>About me</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum repudiandae rerum dolores voluptate quod tempora amet eos repellendus odio voluptates quibusdam sequi unde sint aliquam, esse repellat facilis consectetur. Rem.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt laborum quasi, deserunt nihil fugit, fuga, reiciendis cupiditate vitae distinctio, labore commodi nam ullam minima obcaecati nostrum? Est consequatur, tempora ex!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo nisi labore consequuntur,</p>
   
    <!-- <div class="links">
       <a href="http://blog.ajduke.in" target="_blank">http://blog.ajduke.in</a>
      <a href="https://codepen.io/ajduke" target="_blank">https://codepen.io/ajduke</a>
      <a href="" class="location">Mumbai, India</a>
    </div> -->
    
    <!-- <div class="stats">
      <div class="block">
        <div class="num">350</div>
        <span class="text">Followers</span>
      </div>
      <div class="block">
        <div class="num">245</div>
        <span class="text">Following</span>
      </div>
      <div class="block">
        <div class="num">24</div>
        <span class="text">Pens</span>
      </div>
    </div> -->
  
  </div>
</div>

<style>

 .wrapper {
	 position: relative;
	 width: 850px;
	 height: 500px;
	 margin: 100px auto;
	 background: url(
        https://beeda-primary.s3.us-east-2.amazonaws.com/public/uploads/all/pial.jpg);
	 background-position: 90% 50%;
	 box-shadow: 0 5px 5px rgba(55, 55, 55, 0.4);
}
 .wrapper .name {
	 position: absolute;
	 bottom: 10px;
	 left: 20px;
	 color: #fff;
	 font-size: 55px;
	 word-wrap: wrap;
	 padding: 10px;
	 transition: all 0.4s ease-in-out;
}
 .wrapper .name:hover {
	 cursor: default;
	 transform: translateX(-20px);
}
 .wrapper .name:first-letter {
	 font-size: 100px;
}
 .content {
	 position: absolute;
	 right: 20px;
	 top: -50px;
	 width: 400px;
	 height: 120%;
	 padding: 30px;
	 background: #fff;
	 box-shadow: 0 0 4px rgba(55, 55, 55, 0.3);
	 border-radius: 5px;
}
 .content h2 {
	 color: #444;
	 font-size: 26px;
}
 .content p {
	 color: #999;
}
 .content .links {
	 margin: 30px 0px 50px;
}
 .content .links a {
	 display: block;
	 margin: 10px 0;
	 font-size: 15px;
	 text-decoration: none;
	 color: #333;
}
 /* .content .links a:before {
	 font-family: &#34;
	FontAwesome&#34;
	;
	 content: &#34;
	\f0c1&#34;
	;
	 font-size: 11px;
	 padding-right: 10px;
}
 .content .links a.location:before {
	 content: &#34;
	\f124&#34;
	;
} */
 .content .stats {
	 display: flex;
	 justify-content: space-between;
	 text-align: center;
	 margin-top: 30px;
}
 .content .stats .num {
	 font-size: 25px;
	 letter-spacing: 2px;
}
 .content .stats .text {
	 color: #999;
}
</style>