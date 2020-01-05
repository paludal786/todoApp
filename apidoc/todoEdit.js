/**
 * @api {post} /todo/{id}/edit Edit Todo
 * @apiName Edit activity
 * @apiGroup Todo
 *
 * @apiParam {Number} id Activity unique ID.
 *
 * @apiSuccess {String} task  Add Your Activities.
 * @apiSuccess {DateTime} time  Select Date and Time.
 *
 * @apiSuccessExample Success-Response
 *     HTTP/1.1 200 OK
 *     {
 *       "id":1
 *       "task": "Buy BMW",
 *       "time": "17-01-20 01:59 PM"
 *     }
 *
 * @apiSuccessExample Validation-Error
 *     HTTP/1.1 422 OK
 *     {
 *      "id" : "The id field is required"
 *      "task": "The task field is required".
 *      "time": "The task field is required".
 *     }
 *
 */