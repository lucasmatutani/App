<!DOCTYPE html>
<meta charset="utf-8">
<body>
<script src="https://d3js.org/d3.v5.min.js"></script>
<script>
var data = [1,1,1,1,1,1,1,1,1,1,1]; // 11 segmentos com tamanhos iguais
var width = 420,
    height = 420,
    radius = Math.min(width, height) / 2;

var color = d3.scaleOrdinal()
    .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00", "#314b7c", "#aabbcc", "#ddaaff", "#334488"]); // cores para cada segmento

var arc = d3.arc()
    .outerRadius(radius - 10)
    .innerRadius(0);

var pie = d3.pie()
    .sort(null);

var svg = d3.select("body").append("svg")
    .attr("width", width)
    .attr("height", height)
  .append("g")
    .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var g = svg.selectAll(".arc")
    .data(pie(data))
  .enter().append("g")
    .attr("class", "arc");

g.append("path")
    .attr("d", arc)
    .style("fill", function(d) { return color(d.data); });

</script>
</body>
