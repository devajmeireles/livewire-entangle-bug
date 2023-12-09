<div>
    <div x-data="{
            model: @entangle($fooBar ?? ''),
            boolean: true,
            init () {
                console.log(this.model, this.boolean);
            }
        }">
        Foo Bar
    </div>
</div>
