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
    border: solid 4px rgb(223, 228, 244);
    margin: 7rem 1rem;
    padding: 1rem 1rem 1rem 1rem;
    /* position: ; */
    box-shadow: 10px 15px 20px rgb(200, 200, 200)
}
</style>
@include('template.sidebar')

@include('template.footer')