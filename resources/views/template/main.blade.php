@include('template.heading')
@include('template.navbar')

<div class="container1">
    @yield('tampilan')
</div>

<style>
.container1 {
    background-color: white;
    float: right;
    border-radius: 5px;
    width: 90%;
    border: solid 2px rgb(223, 228, 244);
    margin: 6rem 2rem;
    padding: 1rem 1rem 1rem 1rem;
    /* position: ; */
    box-shadow: 0px 5px 20px rgb(248, 248, 248)
}
</style>

@include('template.footer')