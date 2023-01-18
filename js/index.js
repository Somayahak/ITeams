$(function() {
    const dataSource = new DevExpress.data.DataSource({
        store: products,
        key: "ID",
        group: "Category"
    });
    
    $("#tagBox").dxTagBox({
        dataSource: dataSource,
        valueExpr: "ID",
        displayExpr: "Name",
        searchEnabled: true,
        showSelectionControls: true,
        grouped: true,
        multiline: true,
        maxDisplayedTags: 6,
        label: "Search For Skills...",
        labelMode: "floating",
        onValueChanged: function(e) {
            console.log(e.previousValue);
            console.log(e.value);
        },
        dropDownOptions: {
            height: 300
        }
    });
    
});

const products = [{
    "ID": 1,
    "Name": " ",
    "Category": "Suggested Skills"
},{
    "ID": 2,
    "Name": "SQL",
    "Category": "Data analysis"
}, {
    "ID": 3,
    "Name": "Statistics",
    "Category": "Data analysis"
}, {
    "ID": 4,
    "Name": "Python",
    "Category": "Data analysis"
}, {
    "ID": 5,
    "Name": "Python",
    "Category": "Programming"
}, {
    "ID": 6,
    "Name": "C++",
    "Category": "Programming"
}, {
    "ID": 7,
    "Name": "JavaScript",
    "Category": "Programming"
}, {
    "ID": 8,
    "Name": "Ruby",
    "Category": "Programming"
}, {
    "ID": 9,
    "Name": "PowerShell",
    "Category": "Programming"
}, {
    "ID": 10,
    "Name": "JavaScript",
    "Category": "Web developer"
}, {
    "ID": 11,
    "Name": "HTNL",
    "Category": "Web developer"
}, {
    "ID": 12,
    "Name": "CSS",
    "Category": "Web developer"
}];