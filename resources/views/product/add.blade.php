<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('Dashboard.add_product') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="product-form" action="{{ route('product.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">{{ trans('Dashboard.product_name') }}</label>
                    <input type="text" name="name" class="form-control">
                    <label for="exampleInputPassword1">{{ trans('Dashboard.product_model') }}</label>
                    <input type="text" name="model" class="form-control">
                    <label for="exampleInputPassword1">{{ trans('Dashboard.product_weight') }}</label>
                    <input type="number" name="weight" class="form-control">
                    <label for="exampleInputPassword1">{{ trans('Dashboard.product_price') }}</label>
                    <input type="number" name="price" class="form-control">
                    <label for="exampleInputPassword1">{{ trans('Dashboard.product_discount') }}</label>
                    <input type="number" name="discount" class="form-control">
                    <label for="exampleInputPassword1">{{ trans('Dashboard.product_description') }}</label>
                    {{-- <input type="text" name="description" class="form-control"> --}}
                    <div>

                        <textarea name="description" id="" cols="64" rows="10"></textarea>
                    </div>
                    {{-- <div class="col-md-6">
                        <label for="color0">Color</label>
                        <input type="text" name="colors[]" class="form-control" placeholder="Enter color">
                    </div>
                    <div class="col-md-6">
                        <label for="quantity0">Quantity</label>
                        <input type="number" name="quantities[]" class="form-control" placeholder="Enter quantity">
                    </div> --}}
                    <!-- Container for Dynamic Fields -->
                    <div id="dynamic-fields-container"></div>

                    <!-- Button to Add New Fields -->
                    <button type="button" class="btn btn-success mt-2" id="add-field-btn">
                        + Add Color and Quantity
                    </button>
                    {{-- <label for="exampleInputPassword1">{{ trans('Dashboard.role_name') }}</label>

                        <input type="text" name="name" class="form-control">
                    <label for="exampleInputPassword1">{{ trans('Dashboard.role_name') }}</label>
                    <input type="text" name="name" class="form-control"> --}}
                </div>
                <div class="form-group col-12 mt-2">
                    <div class="row">

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ trans('Dashboard.Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ trans('Dashboard.submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
    // Counter to keep track of the number of dynamic fields added
    let fieldCount = 1;

    // Get the button and container elements
    const addFieldBtn = document.getElementById('add-field-btn');
    const dynamicFieldsContainer = document.getElementById('dynamic-fields-container');

    // Event listener for the button click
    addFieldBtn.addEventListener('click', function () {
        fieldCount++;

        // Create a new div for the color and quantity fields
        const newFields = document.createElement('div');
        newFields.classList.add('row', 'mt-3');

        // Color input
        const colorField = `
            <div class="col-md-6">
                <label for="color${fieldCount}">Color</label>
                <input type="text" name="colors[]" class="form-control" placeholder="Enter color">
            </div>
        `;

        // Quantity input
        const quantityField = `
            <div class="col-md-6">
                <label for="quantity${fieldCount}">Quantity</label>
                <input type="number" name="quantities[]" class="form-control" placeholder="Enter quantity">
            </div>
        `;

        // Append the fields to the newFields div
        newFields.innerHTML = colorField + quantityField;

        // Append the newFields div to the dynamic fields container
        dynamicFieldsContainer.appendChild(newFields);
    });
});

</script> --}}

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        let fieldCount = 0;
        const maxFields = 10; // Maximum number of fields allowed
        const dynamicFieldsContainer = document.getElementById('dynamic-fields-container');
        const addFieldBtn = document.getElementById('add-field-btn');

        // Function to add new fields
        function addFields() {
            if (fieldCount >= maxFields) {
                alert(`You can only add up to ${maxFields} sets of fields.`);
                return;
            }

            fieldCount++;

            // Create a new div for color and quantity fields
            const newFields = document.createElement('div');
            newFields.classList.add('row', 'mt-3');

            // Color input
            const colorField = `
            <div class="col-md-6">
                <label for="color${fieldCount}">Color</label>
                <input type="text" name="colors[]" class="form-control" placeholder="Enter color">
            </div>
        `;

            // Quantity input
            const quantityField = `
            <div class="col-md-6">
                <label for="quantity${fieldCount}">Quantity</label>
                <input type="number" name="quantities[]" class="form-control" placeholder="Enter quantity">
            </div>
        `;

            // Append color and quantity fields to the newFields div
            newFields.innerHTML = colorField + quantityField;

            // Append the newFields div to the dynamic fields container
            dynamicFieldsContainer.appendChild(newFields);
        }

        // Initialize with the first set of fields
        addFields();

        // Event listener for the button click to add more fields
        addFieldBtn.addEventListener('click', addFields);



    });
    form.addEventListener('submit', function(event) {
        // Check if any required field is empty
        const inputs = form.querySelectorAll('input[required], textarea[required]');
        let isValid = true;

        inputs.forEach((input) => {
            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('is-invalid'); // Add Bootstrap invalid class for styling
            } else {
                input.classList.remove('is-invalid');
            }
        });

        // If form is not valid, prevent submission
        if (!isValid) {
            event.preventDefault();
            alert('Please fill in all required fields.');
        }
    });
</script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let fieldCount = 0;
        const maxFields = 10; // Maximum number of fields allowed
        const dynamicFieldsContainer = document.getElementById('dynamic-fields-container');
        const addFieldBtn = document.getElementById('add-field-btn');
        const form = document.getElementById('product-form');

        // Function to add new fields
        function addFields() {
            if (fieldCount >= maxFields) {
                alert(`You can only add up to ${maxFields} sets of fields.`);
                return;
            }

            fieldCount++;

            // Create a new div for color and quantity fields
            const newFields = document.createElement('div');
            newFields.classList.add('row', 'mt-3');

            // Color input
            const colorField = `
                <div class="col-md-6">
                    <label for="color${fieldCount}">Color</label>
                    <input type="text" name="colors[]" class="form-control" placeholder="Enter color" >
                </div>
            `;

            // Quantity input
            const quantityField = `
                <div class="col-md-6">
                    <label for="quantity${fieldCount}">Quantity</label>
                    <input type="number" name="quantities[]" class="form-control" placeholder="Enter quantity" >
                </div>
            `;

            // Append color and quantity fields to the newFields div
            newFields.innerHTML = colorField + quantityField;

            // Append the newFields div to the dynamic fields container
            dynamicFieldsContainer.appendChild(newFields);
        }

        // Initialize with the first set of fields
        addFields();

        // Event listener for the button click to add more fields
        addFieldBtn.addEventListener('click', addFields);

      // Form validation on submit
    //   form.addEventListener('submit', function (event) {
    //     // Check if any required field is empty
    //     const inputs = form.querySelectorAll('input, textarea'); // Select all input and textarea elements
    //     let isValid = true;

    //     inputs.forEach((input) => {
    //         // Check if input is empty
    //         if (!input.value.trim()) {
    //             isValid = false;
    //             input.classList.add('is-invalid'); // Add Bootstrap invalid class for styling
    //         } else {
    //             input.classList.remove('is-invalid');
    //         }
    //     });

    //     // If form is not valid, prevent submission
    //     if (!isValid) {
    //         event.preventDefault();
    //         alert('Please fill in all required fields.');
    //     }
    // });
});
    </script>
