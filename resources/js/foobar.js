export default (model, boolean) => ({
    model: model,
    boolean: boolean,
    init () {
        console.log(this.model, this.boolean);
    }
});
