<form action="{{ url('/form-submit') }}" method="POST">
    <input type="hidden" name="foo" value="bar" />
    <input type="hidden" name="baz" value="boo" />
    <input type="hidden" name="creditcard" value="87845845783475">

    <input type="submit" value="Send" />
</form>