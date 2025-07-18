const addElemFirst = (parentDivId, targetChildDivId) => {
  const parent = document.getElementById(parentDivId);
  const targetChild = document.getElementById(targetChildDivId);
  if (!parent || !targetChild) {
    return;
  }
  if (!parent.contains(targetChild)) {
    return;
  }
  parent.prepend(targetChild);
};

const reorderElements = (parentDivId, desiredDivIds, removeDivIds) => {
  const parent = document.getElementById(parentDivId);
  const allChildren = Array.from(parent.children);
  const allChildrenIds = allChildren?.map(child=>child.id) || [];
  desiredDivIds.forEach((currentId) => {
    const desiredEl = document.getElementById(currentId);
    if(!desiredEl) return;
    if (allChildrenIds.includes(currentId)) {
      currentChildIdxInDesiredList = desiredDivIds.indexOf(currentId);
      parent.appendChild(desiredEl);
      if (desiredDivIds[currentChildIdxInDesiredList + 1] === "hr") {
        const hrElement = document.createElement("hr");
        hrElement.style.cssText = "margin-bottom: 2rem; clear: both;";
        parent.appendChild(hrElement);
      }
    }
    if (removeDivIds.includes(currentId)) {
      desiredEl.remove();
    }
  });
};

// Example implementation below. Add the following code (or something like it with the desired order of divs) the end of collections/individual/index.php

{
  /* <script type="text/javascript">
		document.addEventListener('DOMContentLoaded', ()=>{
			reorderElements("occur-div", ["cat-div", "hr", "sciname-div", "family-div","hr", "taxonremarks-div", "assoccatnum-div", "assoccatnum-div", "idqualifier-div","identref-div","identremarks-div", "determination-div", "hr", "identby-div", "identdate-div","verbeventid-div", "hr", "recordedby-div", "recordnumber-div", "eventdate-div", "hr", "locality-div", "latlng-div", "verbcoord-div", "elev-div", "habitat-div", "assoctaxa-div", "attr-div", "notes-div", "hr", "rights-div", "contact-div", "openeditor-div"], ["occurrenceid-div", "disposition-div"]);

		});
	</script> */
}
