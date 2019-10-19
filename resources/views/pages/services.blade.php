@extends('layout')

@include('partials.inline_nav')

@section('content')

    <!-- MAIN -->
    <section id="main" class="wrapper">
        <div class="inner">
            <header class="align-center">
                <h1>Our Services</h1>
                <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
            </header>
            <h4>Definition</h4>
            <dl>
                <dt>Item 1</dt>
                <dd>
                    <p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                </dd>
                <dt>Item 2</dt>
                <dd>
                    <p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                </dd>
                <dt>Item 3</dt>
                <dd>
                    <p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                </dd>
            </dl>


            <h3>Price</h3>

            <h4>For a private persons</h4>
            <div class="table-wrapper">
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Item 1</td>
                        <td>Ante turpis integer aliquet porttitor.</td>
                        <td>29.99</td>
                    </tr>
                    <tr>
                        <td>Item 2</td>
                        <td>Vis ac commodo adipiscing arcu aliquet.</td>
                        <td>19.99</td>
                    </tr>
                    <tr>
                        <td>Item 3</td>
                        <td> Morbi faucibus arcu accumsan lorem.</td>
                        <td>29.99</td>
                    </tr>
                    <tr>
                        <td>Item 4</td>
                        <td>Vitae integer tempus condimentum.</td>
                        <td>19.99</td>
                    </tr>
                    <tr>
                        <td>Item 5</td>
                        <td>Ante turpis integer aliquet porttitor.</td>
                        <td>29.99</td>
                    </tr>
                    </tbody>
                    <tfoot>
                </table>
            </div>

            <h4>For a company</h4>
            <div class="table-wrapper">
                <table class="alt">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Item 1</td>
                        <td>Ante turpis integer aliquet porttitor.</td>
                        <td>29.99</td>
                    </tr>
                    <tr>
                        <td>Item 2</td>
                        <td>Vis ac commodo adipiscing arcu aliquet.</td>
                        <td>19.99</td>
                    </tr>
                    <tr>
                        <td>Item 3</td>
                        <td> Morbi faucibus arcu accumsan lorem.</td>
                        <td>29.99</td>
                    </tr>
                    <tr>
                        <td>Item 4</td>
                        <td>Vitae integer tempus condimentum.</td>
                        <td>19.99</td>
                    </tr>
                    <tr>
                        <td>Item 5</td>
                        <td>Ante turpis integer aliquet porttitor.</td>
                        <td>29.99</td>
                    </tr>
                    </tbody>
                    <tfoot>
                </table>
            </div>
        </div>
        </div>
    </section>

    @include('partials.footer')
@endsection



