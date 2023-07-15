<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('.product-type-selector').on('click', function() {
            $('.product-type-selector').removeClass('active')
            $(this).addClass('active')
        })

        $('.subcategory').click(function(e) {
            e.stopPropagation(); // Stop event propagation
        });

        $('.category-checkbox').change(function() {
            $(this).parent().find('.subcategory-checkbox').prop('checked', this.checked);
            updateParentCheckbox($(this));
        });

        $('.category').click(function(e) {
            $(this).find('.subcategories').slideToggle();
            e.stopPropagation(); // Stop event propagation
        });

        $('.subcategory-checkbox').click(function(e) {
            e.stopPropagation(); // Stop event propagation
            updateParentCheckbox($(this));
        });

        function updateParentCheckbox($checkbox) {
            var $category = $checkbox.closest('.category');
            var $categoryCheckbox = $category.find('.category-checkbox');
            var $subcategoryCheckboxes = $category.find('.subcategory-checkbox');
            var allSubcategoriesChecked = $subcategoryCheckboxes.filter(':checked').length > 0;
            $categoryCheckbox.prop('checked', allSubcategoriesChecked);
        }
    })
</script>
