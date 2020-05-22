
        <div class="row">
            <div class="span12 aligncenter">
              <h3 class="title">What people <strong>saying</strong> about us</h3>
              <div class="blankline30"></div>
  
              <ul class="bxslider">
                
                <li>
                  <blockquote>
                    Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                    feugiat
                  </blockquote>
                  <div class="testimonial-autor">
                    
                    @foreach ($testimonials -> slice(0,1) as $testimonial)
                    <img src=  {{$testimonial ->img_path }} class="img-fluid" alt="" />
            
                      @endforeach
                    @foreach ($testimonials -> slice(0,1) as $testimonial)
                    <h4>  {{$testimonial -> name }}</h4>
                    <a href="#"> {{$testimonial -> link}} </a>
            
                      @endforeach
                    
                  </div>
                </li>
                <li>
                  <blockquote>
                    Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                    feugiat
                  </blockquote>
                  <div class="testimonial-autor">
                    @foreach ($testimonials -> slice(0,1) as $testimonial)
                    <img src=  {{$testimonial ->img_path }} class="img-fluid" alt="" />
                    <a href="#"> {{$testimonial -> link}} </a>
            
                      @endforeach
                    <h4>Mark Donovan</h4>
                    
                  </div>
                </li>
                <li>
                  <blockquote>
                    Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                    feugiat
                  </blockquote>
                  <div class="testimonial-autor">
                    @foreach ($testimonials -> slice(0,1) as $testimonial)
                    <img src=  {{$testimonial ->img_path }} class="img-fluid" alt="" />
            
                      @endforeach
                    @foreach ($testimonials -> slice(0,1) as $testimonial)
                    <h4>  {{$testimonial -> name }}</h4>
            
                    <a href="#"> {{$testimonial -> link}} </a>
                      @endforeach
                  </div>
                </li>
              </ul>
  
            </div>
          </div>