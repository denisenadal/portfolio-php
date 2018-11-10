var processMacy = macyWrapper('#project-process .project-gallery', {
	hd: 3,
	sd: 3,
	tablet: 2,
	mobile: 2
});
var resultMacy = macyWrapper('#project-results .project-gallery', {
	hd: 2,
	sd: 2,
	tablet: 2,
	mobile: 2
});

resultMacy.denMacyResizeColumn('#project-process .caption-quote', ['hd', 'sd'], 2);