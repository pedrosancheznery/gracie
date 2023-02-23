@extends("layouts/app")

@section("title", "Gracie - Master")

@section("content")
    <section class="section">
        <h1 class="title">Generate Card with Barcode</h1>
        <form method="post" action="{{ route('gen') }}" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label" for="belt">Belt</label>
                <div class="select">
                    <select id="betl" name="belt">
                        <option value="-1" selected>Select one...</option>
                        <option value="Master_Blue">Blue</option>
                        <option value="Master_Blue_Stripe_1">Blue Stripe 1</option>
                        <option value="Master_Blue_Stripe_2">Blue Stripe 2</option>
                        <option value="Master_Blue_Stripe_3">Blue Stripe 3</option>
                        <option value="Master_Blue_Stripe_4">Blue Stripe 4</option>
                        <option value="Master_Brown">Brown</option>
                        <option value="Master_Brown_Stripe_1">Brown Stripe 1</option>
                        <option value="Master_Brown_Stripe_2">Brown Stripe 2</option>
                        <option value="Master_Brown_Stripe_3">Brown Stripe 3</option>
                        <option value="Master_Brown_Stripe_4">Brown Stripe 4</option>
                        <option value="Master_Purple">Purple</option>
                        <option value="Master_Purple_Stripe_1">Purple Stripe 1</option>
                        <option value="Master_Purple_Stripe_2">Purple Stripe 2</option>
                        <option value="Master_Purple_Stripe_3">Purple Stripe 3</option>
                        <option value="Master_Purple_Stripe_4">Purple Stripe 4</option>
                    </select>
                </div>
            </div>

            <div class="field">
                <label class="label" for="first_name">First Name</label>
                <div class="control">
                    <input class="input" type="text" name="first_name">
                </div>
            </div>

            <div class="field">
                <label class="label" for="last_name">Last Name</label>
                <div class="control">
                    <input class="input" type="text" name="last_name">
                </div>
            </div>

            <div class="field">
                <label class="label" for="id_number">ID Number</label>
                <div class="control">
                    <input class="input" type="text" name="id_number">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">Generate Card</button>
                </div>
            </div>
        </form>
    </section>

@endsection()
