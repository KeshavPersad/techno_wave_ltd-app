    <script src="https://js.stripe.com/v3/"></script>

      <form action="{{ route('checkout.stripe') }}" method="POST">
        @csrf
        <button type="submit" id="checkout-button" class="btn btn-medium">Checkout</button>
      </form>

