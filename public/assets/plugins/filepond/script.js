/*
We want to preview images, so we need to register the Image Preview plugin
*/
FilePond.registerPlugin(
	
	// encodes the file as base64 data
  FilePondPluginFileEncode,
	
	// validates the size of the file
	FilePondPluginFileValidateSize,
	
	// corrects mobile image orientation
	FilePondPluginImageExifOrientation,
	
	// previews dropped images
  FilePondPluginImagePreview,
  FilePondPluginImageResize
);
// FilePond1.registerPlugin(
// 	FilePondPluginFileValidateType,
// 	FilePondPluginImageExifOrientation,
// 	FilePondPluginImagePreview,
// 	FilePondPluginImageCrop,
// 	FilePondPluginImageResize,
// 	FilePondPluginImageTransform,
// 	FilePondPluginImageEdit
// );

// Select the file input and use create() to turn it into a pond
// FilePond.create(
// 	document.querySelector('#input_file')
// );