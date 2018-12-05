<?php include("includes/header.php"); ?>
      <section>
           <div class="container">
                    <div class="row text-center header">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                          <h3>Що таке COCOMO модель?</h3>
                        </div>
                    </div>
                    <div class="row animate-in" data-anim-type="fade-in-up">
                         <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                            <div class="services-wrapper">
                               <p>Модель конструктивної вартості (COCOMO) - це алгоритмічна модель оцінки вартості розробки програмного забезпечення, розроблена Баррі Боем (Barry Boehm). Модель використовує просту формулу регресії з параметрами, визначеними з даних, зібраних з ряду проектів. COCOMO використовується для оцінки розміру, зусиль і тривалості на основі вартості програмного забезпечення.</p>
                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                                    <h3>Ваші коментарі</h3>
                                      <div id='comment'>
                                        <?php include("includes/comment.php"); ?>
                                      </div>
                                      <form name="comment" action="bdcomment.php" method="post">
                                        <h3>Залиште коментар:</h3> 
                                          <p>
                                            <label>Ім'я:</label>
                                            <input id="nameComment" type="text" name="name" />
                                          </p>
                                          <p>
                                            <label>Коментар:</label>
                                            <br />
                                               <textarea id="text_comment" name="text_comment" cols="30" rows="50"></textarea>
                                          </p>
                                          <p>
                                            <input type="hidden" name="page_id" value="1" />
                                            <input type="submit" value="Залишити коментар" />
                                          </p>
                                      </form>
                                  </div>
                            </div>
                    		</div>
           			   </div>
               </div>
        	 </section>
<?php include("includes/footer.php"); ?>
