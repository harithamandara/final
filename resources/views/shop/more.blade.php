<x-shop-layout>


  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div>
            <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid wc-image">
          </div>

          <br>

          <div class="row">
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-2-720x480.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-3-720x480.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>

            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-4-720x480.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-5-720x480.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-6">
              <div>
                <img src="assets/images/product-6-720x480.jpg" alt="" class="img-fluid">
              </div>
              <br>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-5">
          <div class="sidebar-item recent-posts">
            <div class="sidebar-heading">
              <h2>Info</h2>
            </div>

            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed velit eveniet quibusdam animi eos, cum!
                Alias, dicta. Minima repudiandae sequi iste, nostrum! Neque temporibus officiis harum esse aperiam
                voluptate? Quibusdam.</p>
            </div>
          </div>

          <br>
          <br>

          <div class="contact-us">
            <div class="sidebar-item contact-form">
              <div class="sidebar-heading">
                <h2>Add to Cart</h2>
              </div>

              <div class="content">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <fieldset>
                        <label for="">Extra 1</label>
                        <select>
                          <option value="0">Extra A</option>
                          <option value="0">Extra B</option>
                          <option value="0">Extra C</option>
                          <option value="0">Extra D</option>
                        </select>
                      </fieldset>
                    </div>
                  </div>

                  <form action="{{ route('cart.add', $products->id) }}" method="POST">
                    @csrf
                    <input type="number" name="quantity" value="1" min="1">
                    <button type="submit">Add to Cart</button>
                  </form>
                </form>
              </div>
            </div>
          </div>

          <br>
        </div>
      </div>
    </div>
  </section>


</x-shop-layout>