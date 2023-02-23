@extends('layouts.app')

@section("title", "Gracie")

@section('content')
<section class="section">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="message">
                <div class="message-header">Quote of the day</div>

                <div class="message-content" id="content"></div>

                <div class="message-footer" id="foot"></div>
            </div>
        </div>
    </div>
</section>
@endsection

<script type="text/javascript">

const api_url ="https://api.forismatic.com/api/1.0/?method=getQuote&format=json&lang=en";

async function getapi(url)
{
  const response = await fetch(url);
  var data = await response.json();
  console.log(data);
  document.getElementById("content").innerHHTML(data.quoteText)
  document.getElementById("foot").innerHHTML(data.quoteAuthor)
}

getapi(api_url);

</script>
