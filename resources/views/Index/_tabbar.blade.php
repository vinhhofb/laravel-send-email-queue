
<ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b">
    <li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px">
        <a id="default-tab" href="#config-tab">Config</a>
    </li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#content-tab">Content</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#customers-tab">Customers</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#send-mail-tab">Send Email</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#process-tab">Process</a></li>
</ul>
{{-- <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script>
    $(document).ready(function () {
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

        console.log(tabTogglers);

        tabTogglers.forEach(function (toggler) {
            toggler.addEventListener("click", function (e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white"); tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white");
            });
        });
    })

</script> --}}
