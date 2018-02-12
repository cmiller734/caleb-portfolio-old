$(document).ready( function() {

var DOMCrawler = {	
	
	//properties
	root_node : document,
	alert_string: "",
	new_line: "",
	indent:"",

//----------------------------------------------------------2. Functions---------------------------------------------------------------------	
	//this function starts the recursion
	init : function() 
	{
		this.alert_string = this.convertToElementText(this.root_node) + "\n"; //adds "Document"
		this.recurseNodes(this.root_node); //starts the recursion, beginning with the Document node
		alert(this.alert_string); //once all recursion has been finished, show everything that was added to the alert string
	},

	//this is a recursive function that will be used to build the DOM tree
	recurseNodes : function(node)
	{
		for (var i = 0; i < node.childNodes.length; i++)
		{
			//the indent level is set for every new line, ensuring correct number of indentations
			//var indent = "";
			var indent_level = 0;
			var child_node = node.childNodes[i];
			//var new_line_current = this.new_line;
			if (child_node == node.firstChild) //only add indent if you are starting a new "series" of childNodes
			{
				this.indent_level++; //every time recurseNodes is called, add an indent. 
			}
			else if (node.childNodes[node.childNodes.length-1])
			{
				this.indent_level--;
			}
			this.define_node(this.indent, this.indent_level, child_node);
			//this.createPreElement()
			this.recurseNodes(child_node);
		}
	},
	
	define_node(indent, indent_level, node)
	{
		//convert indent level to indentation spaces
		this.convertIncrementToSpaces(indent, indent_level);
		
		//actual_indent = indent_level * 2;
		type_indication="";
		//------------------------------------------------GET NODE NAME---------------------------------------------------------------
		node_name= node.nodeName;
		//--------------------------------------NODE TYPE DESCRIPTION-----------------------------------------------------------------
		if (node.nodeType ==1)
		{
			type_indication="Element";
		}
		else if (node.nodeType ==2)
		{
			type_indication="Attribute";
		}
		else if (node.nodeType ==3)
		{
			type_indication="Text";
		}
		else 
		{
			type_indication="Other";
		}
		//
		this.alert_string += this.indent + this.convertToElementText(node) + " node name is " + node_name + " type indication is " + type_indication + "\n";
		
	},
	
	//take in a nodeName, convert it to lower case, and throw < > around it
	convertToElementText: function(node) 
	{
		var new_node_string = "<"+node.nodeName.toLowerCase()+">";
		return new_node_string;
	},
	//convert increment level to number of spaces in an indent
	convertIncrementToSpaces : function(indent, indent_level)
	{
		for (var i = 0; i < indent_level; i++)
		{
			this.indent += "--";
		}
	}
	//finally, take your string and stick it in a PRE element
	/*createPreElement:function(alert_string)
	{
		var body = document.getElementsByTagName("body")[0];
		var pre = document.createElement("pre");
		pre.className = "pre";
		suppText = document.createTextNode("("+alert_string+")");
		pre.appendChild(suppText);
		body.appendChild(pre);
	}*/
}
//---------------------------------------------4. Finally, call init function that makes the whole thing go------------------------------
DOMCrawler.init();
});