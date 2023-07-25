    <script src="https://js.stripe.com/v3/"></script>

      <form action="{{ route('checkout.stripe') }}" method="POST">
        @csrf
        <div class="update-clear">
          <button class="btn btn-clear" type="submit" id="checkout-button" >Proceed to Checkout</button>          
        </div>
      </form>

