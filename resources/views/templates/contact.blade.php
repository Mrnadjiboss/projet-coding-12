
    <section id="content">
        
       
            <div class="span4">
              <div class="clearfix"></div>
              <aside class="right-sidebar">
  
                <div class="widget">
                  <h5 class="widgetheading">Contact information<span></span></h5>
                  @foreach ($contacts -> slice(0,1) as $contact)
                  
                  <ul class="contact-info">
                    <li><label>Address :</label>  {{$contact -> Address}} <br /> Jakarta selatan - Indonesia</li>
                    <li><label>Phone :</label>{{$contact -> phone_number}} </li>
                    <li><label>Fax : </label>{{$contact ->fax_number}} </li>
                    <li><label>Email : </label> {{$contact ->email}} </li>
                  </ul>
      
                  @endforeach
  
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>